<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjoutController extends AbstractController
{
    /**
     * @Route("/Ajout", name="Ajout", methods={"POST"})
     */
    public function ajouterDateAction(Request $request): Response
    {
        // Récupérer les données envoyées via la requête AJAX
        $date = $request->request->get('dateValue');
        dump($date);
        $nom = $request->request->get('nomValue');
        dump($nom);
        $prenom = $request->request->get('prenomValue');
        dump($prenom);

        // Vous pouvez faire des opérations supplémentaires ici, comme enregistrer les données dans une base de données

        // Création de la réponse JSON
        $response = [
            'date' => $date,
            'nom' => $nom,
            'prenom' => $prenom,
        ];

        // Renvoyer la vue Twig après le traitement
        return $this->render('Ajout/Ajout.html.twig', $response);
    }
}

