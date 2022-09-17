<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScoreController extends AbstractController
{
    #[Route('/score', name: 'app_score')]
    public function index(): Response
    {
        return $this->render('score/index.html.twig', [
            'controller_name' => 'ScoreController',
        ]);
    }

    #[Route('/score/result', name: 'app_score_result')]
    public function result(Request $request): Response
    {
        //dump($request->get);

        return $this->render('score/index.html.twig', [
            'controller_name' => 'ScoreController',
        ]);
    }
}
