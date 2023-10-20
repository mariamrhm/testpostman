<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideocenterController extends AbstractController
{
    #[Route('/videocenter', name: 'app_videocenter')]
    public function index(): Response
    {
        return $this->render('videocenter/index.html.twig', [
            'controller_name' => 'VideocenterController',
        ]);
    }
}
