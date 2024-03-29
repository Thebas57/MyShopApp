<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/{name}', name: 'app_home')]
    public function index(HttpFoundationRequest $request, string $name): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'name' => $name,
        ]);
    }
}
