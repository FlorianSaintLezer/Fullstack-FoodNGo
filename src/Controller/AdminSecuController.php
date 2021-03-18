<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\SigninType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/signin", name="signin")
     */
    public function signin(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder): Response
    {
        $users = new Users();
        $form = $this->createForm(SigninType::class, $users);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $passwordCrypt = $encoder->encodePassword($users, $users->getPassword());
            $users->setPassword($passwordCrypt);
            $em->persist($users);
            $em->flush();
            $this->addFlash('signin-success', 'Inscription réussie. Vous pouvez vous connecter');

            return $this->redirectToRoute('home');
        }

        return $this->render('default/signin.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $util): Response
    {
        return $this->render('default/login.html.twig', [
            'lastUsername' => $util->getLastUsername(),
            'error' => $util->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
    }
}
