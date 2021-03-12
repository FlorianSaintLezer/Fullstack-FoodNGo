<?php

namespace App\Controller;

use App\Entity\Recipes;
use App\Entity\Categories;
use App\Repository\RecipesRepository;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function recipes(RecipesRepository $repository, CategoriesRepository $repositoryC): Response
    {
        $recipes = $repository->findAll();
        $categories = $repositoryC->findAll();

        return $this->render('users/recipes.html.twig', [
            'recipes' => $recipes,
            'categories' =>$categories,
             ]);
    }

    /**
     * @Route("/recipes/{id}", name="show_recipe")
     */
    public function showRecipe(Recipes $recipes): Response
    {
        return $this->render('users/show_recipe.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    /**
     * @Route("/recipes/category/{category}", name="filterCategory")
     */
    public function filterCategory(RecipesRepository $repository, CategoriesRepository $repositoryC, $category): Response
    {
        $recipes = $repository->getRecipesByCategory($category);
        $categories = $repositoryC->findAll();
    
        return $this->render('users/recipes.html.twig', [
            'recipes' => $recipes,
            'categories' => $categories,
            'isCategory' => true,
        ]);
    }
}
