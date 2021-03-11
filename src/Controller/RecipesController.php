<?php

namespace App\Controller;

use App\Repository\RecipesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'RecipesController',
        ]);
    }

    /**
     * @Route("/recipes", name="recipes")
     */
    public function recipes(RecipesRepository $repository): Response
    {
        $recipes = $repository->findAll();

        return $this->render('users/recipes.html.twig', [
            'recipes' => $recipes, ]);
    }
}
