<?php

namespace App\Controller;

use App\Entity\Recipes;
use App\Form\RecipesType;
use App\Repository\RecipesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class AdminRecipesController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security) { 

        $this->security = $security;
        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/admin", name="admin_home")
     */
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    /**
     * @Route("/admin/recipes/", name="admin_recipes")
     */
    public function recipes(RecipesRepository $repository): Response
    {
        $recipes = $repository->findAll();

        return $this->render('admin/admin_recipes.html.twig', ['recipes' => $recipes]);
    }

    /**
     * @Route("/admin/recipes/creation", name="admin_recipes_add")
     * @Route("/admin/recipes/{id}", name="admin_recipes_edit",  methods="GET|POST")
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
            $this->addFlash('success', ($modif) ? 'Recipe has been successfully edited' : 'Recipe has been successfully added');

            return $this->redirectToRoute('admin_recipes');
        }

        return $this->render('admin/edit_recipe.html.twig', [
            'recipes' => $recipes,
            'form' => $form->createView(),
            'isModification' => null !== $recipes->getid(),
        ]);
    }

    /**
     * @Route("/admin/recipes/{id}", name="admin_recipes_delete", methods="delete")
     */
    public function suppression(Recipes $recipes, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$recipes->getId(), $request->get('_token'))) {
            $entityManager->remove($recipes);
            $entityManager->flush();
            $this->addFlash('success', 'Recipe has been successfully deleted');

            return $this->redirectToRoute('admin_recipes');
        }
    }
}
