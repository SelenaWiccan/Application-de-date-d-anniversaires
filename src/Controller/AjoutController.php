<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutController extends AbstractController
{
    /**
     * @Route("/Ajout", name="Ajout")
     */
    public function index(): Response
    {
        return $this->render('Ajout/Ajout.html.twig');
    }

}