<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/contacts', name: 'app_front_contacts')]
    public function contacts(): Response
    {
        return $this->render('front/contacts.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/login', name: 'app_front_login')]
    public function login(): Response
    {
        return $this->render('front/login.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    // Commenter ou supprimer cette méthode pour éviter les conflits
    // #[Route('/register', name: 'app_front_register')]
    // public function register(): Response
    // {
    //     return $this->render('front/register.html.twig', [
    //         'controller_name' => 'FrontController',
    //     ]);
    // }
}