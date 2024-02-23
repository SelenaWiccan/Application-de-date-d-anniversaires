<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilLoginController extends AbstractController
{
    /**
     * @Route("/AcceuilLogin", name="AcceuilLogin")
     */
    public function index(): Response
    {
        return $this->render('AcceuilLogin/AcceuilLogin.html.twig');
    }

}