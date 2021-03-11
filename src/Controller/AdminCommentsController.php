<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\CommentsType;
use App\Repository\CommentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCommentsController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security) { 

        $this->security = $security;
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/admin", name="admin_home")
     */
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    /**
     * @Route("/admin/comments/", name="admin_comments")
     */
    public function comments(CommentsRepository $repository): Response
    {
        $comments = $repository->findAll();

        return $this->render('admin/admin_comments.html.twig', ['comments' => $comments]);
    }

    /**
     * @Route("/admin/comments/add", name="admin_comments_add")
     * @Route("/admin/comments/{id}", name="admin_comments_edit",  methods="GET|POST")
     */
    public function modification(Comments $comments = null, Request $request, EntityManagerInterface $entityManager): Response
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

            return $this->redirectToRoute('admin_comments');
        }

        return $this->render('admin/edit_comment.html.twig', [
            'comments' => $comments,
            'form' => $form->createView(),
            'isModification' => null !== $comments->getid(),
        ]);
    }

    /**
     * @Route("/admin/comments/{id}", name="admin_comments_delete", methods="delete")
     */
    public function suppression(Comments $comments, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$comments->getId(), $request->get('_token'))) {
            $entityManager->remove($comments);
            $entityManager->flush();
            $this->addFlash('success', 'Comment has been successfully deleted');

            return $this->redirectToRoute('admin_comments');
        }
    }
}
