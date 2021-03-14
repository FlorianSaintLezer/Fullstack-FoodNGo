<?php

namespace App\Controller;

use App\Form\Type\EditPasswordType;
use App\Form\UsersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{
    /**
     * @Route("/profile", methods="GET|POST", name="profile")
     */
    public function edit(Request $request): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Profile successfully updated');

            return $this->redirectToRoute('profile');
        }

        return $this->render('users/profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editpassword", methods="GET|POST", name="edit_password")
     */
    public function editPassword(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(EditPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passwordCrypt = $encoder->encodePassword($user, $form->get('newPassword')->getData());
            $user->setPassword($passwordCrypt);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('logout');
        }

        return $this->render('users/edit_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
