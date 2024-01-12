<?php

namespace App\Controller;

use App\Form\SignUpFormType;
use Membre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    #[Route('/signup', name: 'app_sign_up')]
    public function index(Request $request): Response
    {
        $data = new Membre();

        $form = $this->createForm(SignUpFormType::class, $data);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData(), $data);
        }


        return $this->render('sign_up/signUp.html.twig', [
            'controller_name' => 'SignUpController',
            'form' => $form
        ]);
    }

    #[Route('/api/signup', name: 'api_sign_up')]
    public function signUp(): Response
    {
        dd(new Membre());
    }
}
