<?php

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/projects', name: 'app_project')]
    public function project(): Response
    {
        return $this->render('pages/project.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
