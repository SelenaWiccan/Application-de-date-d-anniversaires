<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AjoutController extends AbstractController
{
    /**
     * @Route("/Ajout", name="Ajout")
     */
    public function index()
    {
        return $this->render('Ajout/Ajout.html.twig');
    }

    /**
     * @Route("/ajouter_date", name="ajouter_date", methods={"POST"})
     */
    public function ajouterDateAction(Request $request): JsonResponse
    {
        // Récupérer les données envoyées via la requête AJAX
        $date = $request->request->get('date');
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');

        // Création de la réponse JSON
        $response = new JsonResponse([
            'message' => 'Données reçues avec succès',
            'date' => $date,
            'nom' => $nom,
            'prenom' => $prenom,
        ]);

        return $response;
    }
}
