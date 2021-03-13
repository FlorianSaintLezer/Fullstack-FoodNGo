<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\RecipesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FooterController extends AbstractController
{
    public function home(RecipesRepository $repository, CategoriesRepository $repositoryC): Response
    {
        // find 5 recipes from the latest updated
        $recipes = $repository->findBy(
            [],
            [
                'updatedAt' => 'desc',
            ],
            5
        )
        ;

        return $this->render(
            'footer.html.twig',
            [
                'recipes' => $recipes,
            ],
        );
    }

    public function filterCategory(RecipesRepository $repository, CategoriesRepository $repositoryC, $category): Response
    {
        $recipes = $repository->getRecipesByCategory($category);
        $categories = $repositoryC->findAll();

        return $this->render('footer.html.twig', [
            'recipes' => $recipes,
            'categories' => $categories,
            'isCategory' => true,
        ]);
    }
}
