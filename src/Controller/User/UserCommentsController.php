<?php

namespace App\Controller\User;

use App\Entity\Comments;
use App\Form\CommentsType;
use App\Repository\CommentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class UserCommentsController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/comments/", name="comments")
     */
    public function comments(CommentsRepository $repository): Response
    {
        $comments = $repository->findAll();

        return $this->render('user/comments.html.twig', ['comments' => $comments]);
    }

    /**
     * @Route("/user/comments/add", name="comments_add")
     * @Route("/user/comments/edit/{id}", name="comments_edit",  methods="GET|POST")
     */
    public function modification(Comments $comments = null, Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        if (!$comments) {
            $comments = new Comments();
        }
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->security->getUser();
            $comments->setAuthor($user);
            $modif = null !== $comments->getId();
            $entityManager->persist($comments);
            $entityManager->flush();
            $this->addFlash('success', ($modif) ? 'Comment has been successfully edited' : 'Comment has been successfully added');

            return $this->redirectToRoute('comments');
        }

        return $this->render('user/edit_comment.html.twig', [
            'comments' => $comments,
            'form' => $form->createView(),
            'isModification' => null !== $comments->getid(),
        ]);
    }

    /**
     * @Route("/user/comments/{id}", name="comments_delete", methods="delete")
     */
    public function suppression(Comments $comments, Request $request): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$comments->getId(), $request->get('_token'))) {
            $entityManager->remove($comments);
            $entityManager->flush();
            $this->addFlash('success', 'Comment has been successfully deleted');

            return $this->redirectToRoute('comments');
        }
    }
}
