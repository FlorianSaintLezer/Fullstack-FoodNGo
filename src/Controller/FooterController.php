<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\PartnersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FooterController extends AbstractController
{
    public function getEmbed(CategoriesRepository $repoC, PartnersRepository $repoP, int $max = 3): Response
    {
        $categories = $repoC->findAll();
        $partners = $repoP->findAll();

        return $this->render('_embed.html.twig', [
            'categories' => $categories,
            'partners' => $partners,
        ]);
    }
}
