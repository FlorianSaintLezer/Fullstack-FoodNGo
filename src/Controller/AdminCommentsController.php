<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\CommentsType;
use App\Repository\CommentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCommentsController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_home")
     */
    public function index(): Response
    {
        return $this->render('admin_recipes/admin.html.twig');
    }

    /**
     * @Route("/admin/comments/", name="comments")
     */
    public function comments(CommentsRepository $repository): Response
    {
        $comments = $repository->findAll();

        return $this->render('admin_comments/adminComments.html.twig', ['comments' => $comments]);
    }

    /**
     * @Route("/admin/comments/creation", name="admin_comments_creation")
     * @Route("/admin/comments/{id}", name="admin_comments_modification",  methods="GET|POST")
     */
    public function modification(Comments $comments = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$comments) {
            $comments = new Comments();
        }
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $modif = null !== $comments->getId();
            $entityManager->persist($comments);
            $entityManager->flush();
            $this->addFlash('success', ($modif) ? 'Comment has been successfully edited' : 'Comment has been successfully added');

            return $this->redirectToRoute('admin_comments');
        }

        return $this->render('admin_comments/modificationComments.html.twig', [
            'comments' => $comments,
            'form' => $form->createView(),
            'isModification' => null !== $comments->getid(),
        ]);
    }

    /**
     * @Route("/admin/comments/{id}", name="admin_comments_suppression", methods="delete")
     */
    public function suppression(Comments $comments, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$comments->getId(), $request->get('_token'))) {
            $entityManager->remove($comments);
            $entityManager->flush();
            $this->addFlash('success', 'Recipe has been successfully deleted');

            return $this->redirectToRoute('admin_comments');
        }
    }
}
