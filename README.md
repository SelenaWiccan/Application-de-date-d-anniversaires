﻿# Application-de-date-d-anniversaires
Après lancement du serveur :
****************************************************************************************************
page d'acceuil (sans connexion): http://127.0.0.1:8001/nice/stuff
  -> cette page contient deux boutons 1 bouton "créer un compte" qui renvoie vers la page de création de compte et 1 bouton "connexion" qui renvoie vers la page de création de compte
  -> Tenter de renommer la page et le controller
****************************************************************************************************
page de création de compte : (pas encore créée) 
  -> Cette page doit contenir un champ 'Nom' , un champ 'mot de passe' ,  un champ 'retaper le mot de passe' et un bouton valider 
  -> le bouton valider renvoie vers la page d'acceuil (avant connexion) pour ensuite s'authentifier avec le bouton connecter
***************************************************************************************************
page de login : (pas encore créée)
  -> la page doit contenir un champ 'Nom' , un champ 'Mot de passe' et 1 bouton 'Valider'
  -> le bouton 'Valider' renvoie vers la page d'acceuil (après connexion)
**************************************************************************************************
page d'acceuil (après connexion) : (pas encore créée) 
  -> la page doit contenir une liste de tout les anniversaires enregistrés pour les prochains jours et un bouton 'Ajouter tout'
  -> le bouton 'Ajouter tout' renvoie vers la page 'liste-date' pour afficher toutes les dates enregistrées
**************************************************************************************************
page liste : (pas encore créée)
  -> la page doit contenir les champs avec les dates enregistrées , 1 bouton 'Ajouter' qui renvoie vers la page 'Ajout' 1 bouton 'Modifier' et 1 bouton 'Supprimer'
  -> le bouton 'Ajouter' renvoie vers la page Ajout
  -> le bouton 'Modifier' renvoie vers la page modification 
  -> le bouton 'Supprimer' ouvre une popup Suppression qui demande la validation de la suppression donc avec 'oui ou non
**************************************************************************************************
page Ajout : (pas encore créée) 
  -> la page doit contenir un champ 'Nom' , un champ 'Date et un bouton 'créer
  -> le bouton 'Créer' renvoie vers la page 'liste' et affiche la nouvelle date ajoutée
**************************************************************************************************
page Modification : (pas encore créée)
  -> la page doit contenir un champ 'Nom' , un champ 'date' , un bouton 'Modifier' et un bouton 'Annuler'
  -> le bouton 'Modifier' valide la modification et renvoie vers la page liste et affiche la date modifiée
  -> le bouton 'Annuler' renvoie vers la page liste et affiche la date sans modifications
*************************************************************************************************
Sur chacune des pages, il doit y avoir un bouton pour se déconnecter et celui-ci renverra vers la page d'acceuil (avant connexion)
  
