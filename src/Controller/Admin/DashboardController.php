<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Comments;
use App\Entity\Recipes;
use App\Entity\Users;
use App\Entity\Roles;

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
     * 
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(RecipesCrudController::class)->generateUrl());
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Manage recipes');
        yield MenuItem::linkToCrud('Recipes', 'fas fa-utensils', Recipes::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Categories::class);
        yield MenuItem::section('');
        yield MenuItem::section('Manage users');
        yield MenuItem::linkToCrud('Comments', 'fas fa-comments', Comments::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-users', Users::class);
        yield MenuItem::section('');
        yield MenuItem::section('Return Home');
        yield MenuItem::linkToRoute('Back','fas fa-sign-out-alt', 'home');
    }

    public function adminDashboard()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // // or add an optional message - seen by developers
        // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
    }


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="./img/logo.png"><span class="text-small">Admin</span>');
    }
}
