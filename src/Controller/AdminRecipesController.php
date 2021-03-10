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

class AdminRecipesController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_home")
     */
    public function index(): Response
    {
        return $this->render('admin_recipes/admin.html.twig');
    }

    /**
     * @Route("/admin/recipes/", name="admin_recipes")
     */
    public function recipes(RecipesRepository $repository): Response
    {
        $recipes = $repository->findAll();

        return $this->render('admin_recipes/adminRecipes.html.twig', ['recipes' => $recipes]);
    }

    /**
     * @Route("/admin/recipes/creation", name="admin_recipes_creation")
     * @Route("/admin/recipes/{id}", name="admin_recipes_modification",  methods="GET|POST")
     */
    public function modification(Recipes $recipes = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$recipes) {
            $recipes = new Recipes();
        }
        $form = $this->createForm(RecipesType::class, $recipes);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $modif = null !== $recipes->getId();
            $entityManager->persist($recipes);
            $entityManager->flush();
            $this->addFlash('success', ($modif) ? 'Recipe has been successfully edited' : 'Recipe has been successfully added');

            return $this->redirectToRoute('admin_recipes');
        }

        return $this->render('admin_recipes/modificationRecipes.html.twig', [
            'recipes' => $recipes,
            'form' => $form->createView(),
            'isModification' => null !== $recipes->getid(),
        ]);
    }

    /**
     * @Route("/admin/recipes/{id}", name="admin_recipes_suppression", methods="delete")
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
