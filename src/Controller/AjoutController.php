<?php

namespace App\Controller;

use App\Entity\Date;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\ORM;

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
    public function ajouterDateAction(Request $request): JsonResponse
    {
        // Récupérer les données envoyées via la requête AJAX
        $date = $request->request->get('date');
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');

        // Créer une nouvelle instance de l'entité Date et définir ses propriétés
        $entity = new Date(); // Utilisation de l'entité Date
        $entity->setDate(new \DateTime($date)); // Assurez-vous que votre propriété date est de type \DateTime
        $entity->setNom($nom);
        $entity->setPrenom($prenom);

        // Obtenir le gestionnaire d'entités (Entity Manager)
        $entityManager = $this->getDoctrine()->getManager();

        // Persistez l'entité
        $entityManager->persist($entity);

        // Exécuter les opérations en base de données
        $entityManager->flush();

        // Création de la réponse JSON
        $response = new JsonResponse([
            'message' => 'Données insérées avec succès',
            'date_ajoutee' => $date,
            'nom_ajoutee' => $nom,
            'prenom_ajoutee' => $prenom,
        ]);

        return $response;
    }
}
