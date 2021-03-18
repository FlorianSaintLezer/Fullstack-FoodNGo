<?php

namespace App\Controller\User;

use App\Entity\Recipes;
use App\Form\RecipesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class UserRecipesController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    //////////////////////////
    // ADD OR EDIT A RECIPE //
    //////////////////////////

    /**
     * @Route("/user/recipe/add", name="recipe_add")
     * @Route("/user/recipe/edit/{id}", name="recipe_edit",  methods="GET|POST")
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
            $this->addFlash('recipe-edit', ($modif) ? 'Recette modifiée avec succès' : 'Recette rajoutée avec succès');

            // return $this->redirectToRoute('recipes');
            return $this->redirectToRoute('show_recipe', ['id' => $recipes->getId()]);
        }

        return $this->render('user/edit_recipe.html.twig', [
            'recipes' => $recipes,
            'form' => $form->createView(),
            'isModification' => null !== $recipes->getid(),
        ]);
    }

    /////////////////////
    // DELETE A RECIPE //
    /////////////////////

    /**
     * @Route("/user/recipe/{id}", name="recipe_delete", methods="delete")
     */
    public function suppression(Recipes $recipes, Request $request): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$recipes->getId(), $request->get('_token'))) {
            // dd($recipes);
            $this->entityManager->remove($recipes);
            $this->entityManager->flush();
            $this->addFlash('recipe-delete', 'La recette a été supprimée');

            return $this->redirectToRoute('recipes');
        }
    }
}
