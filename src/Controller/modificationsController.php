<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class modificationsController extends AbstractController
{
    /**
     * @Route("/modifications", name="modifications")
     */
    public function index(): Response
    {
        return $this->render('modifications/modifications.html.twig');
    }

}