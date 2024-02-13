<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GestionDateController extends AbstractController
{
    /**
     * @Route("/gestion/date", name="app_gestion_date")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GestionDateController.php',
        ]);
    }
    /**
     * @Route("/blog", name="app_blog")
     */
    public function blog(): JsonResponse
    {
        return $this->json("Page de blog");
    }

}
