<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualitesController extends AbstractController
{
    #[Route('/actualites', name: 'app_actualites')]
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findOrderByDate();

        return $this->render('front/actualites.html.twig', [
            'posts' => $posts,
        ]);
    }
}