<?php

namespace App\Controller\User;

use App\Form\EditPasswordType;
use App\Form\UsersType;
use App\Repository\CommentsRepository;
use App\Repository\RecipesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

class UsersController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    // /**
    //  * @Route("/user/profile", methods="GET|POST", name="profile")
    //  */
    // public function edit(Request $request): Response
    // {
    //     $user = $this->getUser();

    //     $form = $this->createForm(UsersType::class, $user);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $this->getDoctrine()->getManager()->flush();

    //         $this->addFlash('profil-success', 'Profil mis à jour');

    //         return $this->redirectToRoute('profile');
    //     }

    //     return $this->render('user/profile.html.twig', [
    //         'user' => $user,
    //         'form' => $form->createView(),
    //     ]);
    // }

    /**
     * @Route("/user/profile", name="profile")
     */
    public function profile(RecipesRepository $repoR, CommentsRepository $repoC): Response
    {
        $user = $this->getUser();
        $recipes = $repoR->findAll();
        $comments = $repoC->findAll();

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'recipes' => $recipes,
            'comments' => $comments,
        ]);
    }

    // /**
    //  * @Route("/user/editpassword", methods="GET|POST", name="edit_password")
    //  */
    // public function editPassword(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $em): Response
    // {
    //     $user = $this->getUser();

    //     $form = $this->createForm(EditPasswordType::class);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $passwordCrypt = $encoder->encodePassword($user, $form->get('password')->getData());
    //         $user->setPassword($passwordCrypt);
    //         $em->persist($user);
    //         $em->flush();

    //         return $this->redirectToRoute('logout');
    //     }

    //     return $this->render('user/edit_password.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }
}
