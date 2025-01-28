<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/actualites', name: 'app_front_actualites')]
    public function actu(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findOrderByDate();

        return $this->render('front/actualites.html.twig', [
            'controller_name' => 'FrontController',
            'posts' => $posts,
        ]);
    }


    #[Route('/contacts', name: 'app_front_contacts')]
    public function contacts(): Response
    {
        return $this->render('front/contacts.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

}
