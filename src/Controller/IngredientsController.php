<?php

namespace App\Controller;

use App\Repository\IngredientsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IngredientsController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('recipes/index.html.twig', [
            'controller_name' => 'RecipesController',
        ]);
    }

    /**
     * @Route("/recipes", name="recipes")
     */
    public function recipes(IngredientsRepository $repository): Response
    {
        $recipes = $repository->findAll();

        return $this->render('ingredients/ingredients.html.twig', [
            'recipes' => $recipes]);
    }
}
