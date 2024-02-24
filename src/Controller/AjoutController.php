<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AjoutController extends AbstractController
{
    /**
     * @Route("/Ajout", name="Ajout")
     */
    public function index(): Response
    {
        return $this->render('Ajout/Ajout.html.twig');
    }

    /**
     * @Route("/ajouter_date", name="ajouter_date", methods={"POST"})
     */
    public function ajouterDateAction(Request $request): Response
    {
        // Récupérer les données envoyées via la requête AJAX
        $date = $request->request->get('dateInput'); // Assurez-vous que 'dateInput' correspond au dateInput de votre input texte

        // Vérifiez si la valeur est correctement récupérée
        var_dump($date); // Cela vous aidera à vérifier si la valeur est correctement récupérée
        echo ($date);

        // Faites quelque chose avec la date récupérée, par exemple, enregistrez-la dans la base de données

//        $dateAjoutee = new \DateTime();
//        $dateFormatee = $dateAjoutee->format('Y-m-d H:i:s');

        // Création de la réponse JSON
        $response = new JsonResponse([
            'message' => 'Date ajoutée avec succès',
            'date_ajoutee' => $date
        ]);

        return $response;
    }
}
