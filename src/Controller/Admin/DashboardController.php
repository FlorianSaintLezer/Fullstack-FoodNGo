<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Comments;
use App\Entity\Partners;
use App\Entity\Recipes;
use App\Entity\Users;
use App\Repository\CategoriesRepository;
use App\Repository\CommentsRepository;
use App\Repository\PartnersRepository;
use App\Repository\RecipesRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class DashboardController extends AbstractDashboardController
{
    private $entityManager;
    private $security;
    private $repoR;
    private $repoC;
    private $repoU;
    private $repoP;

    public function __construct(EntityManagerInterface $entityManager, Security $security, RecipesRepository $repoR, CategoriesRepository $repoCat, CommentsRepository $repoCom, UsersRepository $repoU, PartnersRepository $repoP)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
        $this->repoR = $repoR;
        $this->repoCat = $repoCat;
        $this->repoCom = $repoCom;
        $this->repoU = $repoU;
        $this->repoP = $repoP;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $countR = $this->repoR->countRecipes();
        $countCom = $this->repoCom->countComments();
        $countCat = $this->repoCat->countCategories();
        $countU = $this->repoU->countUsers();
        $countP = $this->repoP->countPartners();

        // find 5 last users
        $lastUsers = $this->repoU->findBy(
            [],
            [
                'updatedAt' => 'desc',
            ],
            5
        )
        ;
        // 5 last published recipes
        $lastRecipes = $this->repoR->findBy(
            [],
            [
                'updatedAt' => 'desc',
            ],
            5
        )
        ;
        // 5 last published comments
        $lastComments = $this->repoCom->findBy(
            [],
            [
                'updatedAt' => 'desc',
            ],
            5
        )
        ;

        return $this->render('admin/stats.html.twig', [
            'countR' => $countR,
            'countCat' => $countCat,
            'countCom' => $countCom,
            'countU' => $countU,
            'countP' => $countP,
            'lastUsers' => $lastUsers,
            'lastRecipes' => $lastRecipes,
            'lastComments' => $lastComments,
        ]);
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fas fa-chart-line');
        yield MenuItem::section('Gestion Recettes');
        yield MenuItem::linkToCrud('Recettes', 'fas fa-utensils', Recipes::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-list', Categories::class);
        yield MenuItem::section('');
        yield MenuItem::section('Gestion Utilisateurs');
        yield MenuItem::linkToCrud('Commentaires', 'fas fa-comments', Comments::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', Users::class);
        yield MenuItem::section('');
        yield MenuItem::section('Partenaires');
        yield MenuItem::linkToCrud('Partners', 'far fa-handshake', Partners::class);
        yield MenuItem::section('');
        yield MenuItem::section('Accueil');
        yield MenuItem::linkToRoute('Retour', 'fas fa-sign-out-alt', 'home');
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
            ->setTitle('<img src="./img/logo.png" style="width:100px; height:auto;"><span class="text-small">Admin&</span><span style="color:#BB727F; font-weight:900;">GO!</span>')
        ;
    }
}
