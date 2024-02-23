<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class listeController extends AbstractController
{
    /**
     * @Route("/Ajout", name="Ajout")
     */
    public function index(): Response
    {
        return $this->render('liste/liste.html.twig');
    }

}