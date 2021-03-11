<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Comments;
use App\Entity\Recipes;
use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(RecipesCrudController::class)->generateUrl());
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Administration');
        yield MenuItem::linkToCrud('Recipes', 'fas fa-list', Recipes::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Categories::class);
        yield MenuItem::linkToCrud('Comments', 'fas fa-list', Comments::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-list', Users::class);
    }

    // public function configureDashboard(): Dashboard
    // {
    //     return Dashboard::new()
    //         ->setTitle('EPCF2');
    // }
}
