<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Comments;
use App\Entity\Recipes;
use App\Form\CommentsType;
use App\Repository\CategoriesRepository;
use App\Repository\CommentsRepository;
use App\Repository\RecipesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class RecipesController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    //////////////
    // HOMEPAGE //
    //////////////

    /**
     * @Route("/", name="home")
     */
    public function home(RecipesRepository $repository, CategoriesRepository $repositoryC): Response
    {
        // find 3 recipes from the latest updated
        $lasts = $repository->findBy(
            [],
            [
                'updatedAt' => 'desc',
            ],
            3
        )
        ;
        $recipes = $repository->findAll();
        $categories = $repositoryC->findAll();

        return $this->render(
            'default/index.html.twig',
            [
                'lasts' => $lasts,
                'recipes' => $recipes,
                'categories' => $categories,
            ],
        );
    }

    //////////////////////
    // SHOW ALL RECIPES //
    //////////////////////

    /**
     * @Route("/recipes", name="recipes")
     */
    public function recipes(RecipesRepository $repository, CategoriesRepository $repositoryC): Response
    {
        $recipes = $repository->findAll();
        $categories = $repositoryC->findAll();

        return $this->render('default/all_recipes.html.twig', [
            'recipes' => $recipes,
            'categories' => $categories,
            'isCategory' => false,
        ]);
    }

    //////////////////////////////////
    // SHOW ALL RECIPES BY CATEGORY //
    //////////////////////////////////

    /**
     * @Route("/recipes/category/{category}", name="filterCategory")
     *
     * @param mixed $category
     */
    public function filterCategory(RecipesRepository $repository, CategoriesRepository $repositoryC, $category): Response
    {
        $recipes = $repository->getRecipesByCategory($category);
        $categories = $repositoryC->findAll();
        $cat = $repositoryC->findBy(['id' => $category])[0];

        return $this->render('default/all_recipes.html.twig', [
            'recipes' => $recipes,
            'categories' => $categories,
            'isCategory' => true,
            'cat' => $cat,
        ]);
    }

    // ///////////////////////////// //
    // // SHOW ONE RECIPE WITH ID // //
    // ///   with comment form   /// //
    // ///////////////////////////// //

    /**
     * @Route("/recipes/{id}", name="show_recipe", methods="GET")
     */
    public function showRecipe(Recipes $recipes, CommentsRepository $repoComments): Response
    {
        $comments = new Comments();
        $form = $this->createForm(CommentsType::class, $comments);
        $comments = $repoComments->findBy([
            'recipe' => $recipes,
        ]);

        return $this->render('default/show_recipe.html.twig', [
            'recipes' => $recipes,
            'comments' => $comments,
            'commentForm' => $form->createView(),
        ]);
    }

    // ///////////////////////////////
    // // ADD A COMMENT TO A RECIPE //
    // ///////////////////////////////

    /**
     * @Route("/recipes/{id}", name="comment_add",methods="POST")
     *
     * @param mixed $recipes
     */
    public function addComment(Recipes $recipes, Comments $comments = null, Request $request): Response
    {
        $comments = new Comments();
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->security->getUser();
            $comments
                ->setUpdatedAt(new \DateTime('now'))

                ->setRecipe($recipes)
                ->setAuthor($user)
            ;
            $this->entityManager->persist($comments);
            $this->entityManager->flush();
            $this->addFlash('comment-add', 'Commentaire ajouté');

            return $this->redirectToRoute('show_recipe', ['id' => $recipes->getId()]);
        }
    }

    // // ///////////////////////////// //
    // // // SHOW ONE RECIPE WITH ID // //
    // // ///   with comment form   /// //
    // // ///////////////////////////// //

    // /**
    //  * @Route("/recipes/{id}", name="show_recipe", methods="GET")
    //  */
    // public function showRecipe(Recipes $recipes): Response
    // {
    //     $form = $this->createForm(CommentsType::class, $comments);

    //     return $this->render('default/show_recipe.html.twig', [
    //         'recipes' => $recipes,
    //         'commentForm' => $form->createView(),
    //     ]);
    // }

    // public function getCategories(CategoriesRepository $repo, Categories $categories)
    // {
    //     $categories = $repo->findAll();
    //     $result = '';

    //     $result .= $categories->getName().' - ';

    //     return new Response($result);
    // }

    // public function getCategories(CategoriesRepository $repo, int $max = 3): Response
    // {
    //     $categories = $repo->findAll();

    //     return $this->render('_embed.html.twig', [
    //         'categories' => $categories,
    //     ]);
    // }

    // public function getPartners(PartnersRepository $repo, int $max = 3): Response
    // {
    //     $partners = $repo->findAll();

    //     return $this->render('_embed.html.twig', [
    //         'partners' => $partners,
    //     ]);
    // }
}
