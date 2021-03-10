<?php

namespace App\Controller;

use App\Form\Type\EditPasswordType;
use App\Form\UsersType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/profile", name="profile")
 */
// * @IsGranted("ROLE_USER")
class UsersController extends AbstractController
{
    /**
     * @Route("/edituser", methods="GET|POST", name="edit_user")
     */
    public function edit(Request $request): Response
    {
        $user = $this->getUsers();

        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Profile successfully updated');

            return $this->redirectToRoute('edit_user');
        }

        return $this->render('users/editUser.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editpassword", methods="GET|POST", name="edit_password")
     */
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(EditPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passwordCrypt = $encoder->encodePassword($users, $form->get('newPassword')->getData());
            $user->setPassword($passwordCrypt);
            $em->persist($users);
            $em->flush();

            return $this->redirectToRoute('logout');
        }

        return $this->render('users/editPassword.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
