<?php

namespace App\Controller;

use App\Entity\Recipes;
use App\Form\RecipesType;
use App\Repository\CategoriesRepository;
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
        // find 5 recipes from the latest updated
        $lasts = $repository->findBy(
            [],
            [
                'updatedAt' => 'desc',
            ],
            3
        )
        ;

        return $this->render(
            'default/index.html.twig',
            [
                'lasts' => $lasts,
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

        return $this->render('users/all_recipes.html.twig', [
            'recipes' => $recipes,
            'categories' => $categories,
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

        return $this->render('users/all_recipes.html.twig', [
            'recipes' => $recipes,
            'categories' => $categories,
            'isCategory' => true,
        ]);
    }

    /////////////////////////////
    // SHOW ONE RECIPE WITH ID //
    /////////////////////////////

    /**
     * @Route("/recipes/{id}", name="show_recipe")
     */
    public function showRecipe(Recipes $recipes): Response
    {
        return $this->render('users/show_recipe.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    //////////////////////////
    // ADD OR EDIT A RECIPE //
    //////////////////////////

    /**
     * @Route("/recipe/add", name="recipe_add")
     * @Route("/recipe/edit/{id}", name="recipe_edit",  methods="GET|POST")
     */
    public function modification(Recipes $recipes = null, Request $request): Response
    {
        if (!$recipes) {
            $recipes = new Recipes();
        }
        $form = $this->createForm(RecipesType::class, $recipes);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->security->getUser();
            // dd($user); //var_dump
            $recipes->setAuthor($user);
            $modif = null !== $recipes->getId();
            $this->entityManager->persist($recipes);
            $this->entityManager->flush();
            $this->addFlash('Bravo', ($modif) ? 'Recette modifiée avec succès' : 'Recette rajoutée avec succès');

            return $this->redirectToRoute('recipes');
        }

        return $this->render('users/edit_recipe.html.twig', [
            'recipes' => $recipes,
            'form' => $form->createView(),
            'isModification' => null !== $recipes->getid(),
        ]);
    }

    /////////////////////
    // DELETE A RECIPE //
    /////////////////////

    /**
     * @Route("/recipes/{id}", name="recipe_delete", methods="delete")
     */
    public function suppression(Recipes $recipes, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$recipes->getId(), $request->get('_token'))) {
            $em->remove($recipes);
            $em->flush();
            $this->addFlash('success', 'Recipe has been successfully deleted');

            return $this->redirectToRoute('recipes');
        }
    }
}
