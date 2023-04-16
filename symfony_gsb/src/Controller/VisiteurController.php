<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Modele\ConnexionBdd;
use PDO;



class VisiteurController extends AbstractController
{
    public function connexion(): Response
    {
        $status = session_status();

        if($status == PHP_SESSION_ACTIVE){
            session_start();
            session_destroy();
        }

        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }


    

    public function connecter(): Response{


        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        $user = ConnexionBdd::connecterVisiteur($login, $mdp);

        if($user !== FALSE){

            $status = session_status();

            if($status == PHP_SESSION_NONE){
                session_start();
                $_SESSION[ "idVisiteur" ] = $user[ "id" ] ;
                $_SESSION[ "nomVisiteur" ] = $user[ "nom" ] ; 
                $_SESSION[ "prenomVisiteur" ] = $user[ "prenom" ] ; 
                
                return $this->redirect('./Accueil');
            }else
            if($status == PHP_SESSION_ACTIVE){
                //Destroy current and start new one
                session_destroy();
                session_start();
                $_SESSION[ "idVisiteur" ] = $user[ "id" ] ;
                $_SESSION[ "nomVisiteur" ] = $user[ "nom" ] ; 
                $_SESSION[ "prenomVisiteur" ] = $user[ "prenom" ] ; 
                
                return $this->redirect('./Accueil');
            }


            
        }
        else{
            return $this->redirect('./Connexion');
        }

    }

    public function deconnecter(): Response{
        session_start();
        session_destroy() ;
        return $this->redirect('./Connexion');
    }



    public function accueil(): Response
    {     
        session_start();


        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            
                $idVisiteur = $_SESSION['idVisiteur'];

                ConnexionBdd::clotureFicheFrais($idVisiteur);

                $verifFicheFrais = ConnexionBdd::verifInsertFicheFrais($idVisiteur);


                if($verifFicheFrais == 0){
                    ConnexionBdd::insertFicheFrais($idVisiteur);
                    ConnexionBdd::insertLigneFraisForfait($idVisiteur,0,"ETP");
                    ConnexionBdd::insertLigneFraisForfait($idVisiteur,0,"KM");
                    ConnexionBdd::insertLigneFraisForfait($idVisiteur,0,"NUI");
                    ConnexionBdd::insertLigneFraisForfait($idVisiteur,0,"REP");
                }
    
                return $this->render('visiteur/accueilVisiteur.html.twig', [
                'controller_name' => 'VisiteurController',
                ]);
            
            }
            
    }

    public function consulterVue(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('visiteur/consulterVisiteur.html.twig', []);
        }

    }


    public function retourConsulterVue(): Response{
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('visiteur/accueilVisiteur.html.twig', []);
        }

    }

    public function consulter()
    {


        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            $mois = $_POST['mois'];
            $idVisiteur = $_SESSION['idVisiteur'];

            $ligneFicheFrais = ConnexionBdd::getLigneFicheFrais($idVisiteur, $mois);
            $ligneFicheFraisHF = ConnexionBdd::getLigneFicheFraisHF($idVisiteur, $mois);


            if (empty($ligneFicheFrais)) {
                return $this->redirect('./Consulter');
            }else{
                return $this->render('visiteur/resultConsulterVisiteur.html.twig', [
                    'ligneFicheFrais' => $ligneFicheFrais,
                    'ligneFicheFraisHF' => $ligneFicheFraisHF,
                ]);            
            }

        }

    }


    public function retourConsulter(): Response{
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('visiteur/consulterVisiteur.html.twig', []);
        }

    }





    public function ficheFraisVue(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{

            $idVisiteur = $_SESSION['idVisiteur'];
            $verifEtatFicheFrais = ConnexionBdd::verifEtatFicheFrais($idVisiteur);
            if($verifEtatFicheFrais == 1){
                return $this->render('visiteur/accueilVisiteur.html.twig', [
                    'controller_name' => 'VisiteurController',
                ]); 
            }else{
                $idVisiteur = $_SESSION['idVisiteur'];
                $ligneFraisHorsForfait = ConnexionBdd::getLigneFraisHorsForfait($idVisiteur) ;
                $quantitesLibelles = ConnexionBdd::getQuantiteLibelle($idVisiteur) ;
                return $this->render('visiteur/ficheFraisVisiteur.html.twig', [
                    'ligneFraisHorsForfait' => $ligneFraisHorsForfait,
                    'quantitesLibelles' => $quantitesLibelles,
                ]);
            }
            
            
        }

    }

    public function ficheFraisVueRetour(): Response{
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('visiteur/accueilVisiteur.html.twig', []);
        }

    }

    public function ficheFrais():Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{

            $montantETP = $_GET['ETP'];
            $montantKM = $_GET['KM'];
            $montantNUI = $_GET['NUI'];
            $montantREP = $_GET['REP'];

            $libelleHF = $_GET['libelle'];
            $dateHF  = $_GET['date'];
            $montantHF = $_GET['montant'];
            $idVisiteur = $_SESSION['idVisiteur'];

            if($libelleHF != null && $dateHF != null && $montantHF != null){
                try{
                    ConnexionBdd::insertLigneFraisHorsForfait($idVisiteur, $dateHF, $libelleHF,  $montantHF);
                }catch( PDOException $e ){
                    echo $e->getMessage();
                }
            }


            $ETP = ConnexionBdd::verifMontantETP($montantETP);
            $KM = ConnexionBdd::verifMontantKM($montantKM);
            $NUI = ConnexionBdd::verifMontantNUI($montantNUI);
            $REP = ConnexionBdd::verifMontantREP($montantREP);

            $fraisForfaitaires = array(
                "ETP" => $ETP,
                "KM" => $KM,
                "NUI" => $NUI,
                "REP" => $REP
            );
            
            // Parcourir la structure de données pour mettre à jour chaque type de frais
            foreach ($fraisForfaitaires as $frais => $info) {
                if ($info != null) {
                    $montant = $info["montant" . $frais];
                    $libelle = $info["libelle" . $frais];
                    $obj = ConnexionBdd::updateLigneFraisForfait($idVisiteur, $montant, $libelle);
                }
            }

        }

        return $this->redirect('./FicheDeFrais');

    }

    public function supprimerFicheHorsForfait():Response
    {


        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{

            $fraisHorsForfait = $_POST['fraisHorsForfait'];

            ConnexionBdd::deleteLigneHorsForfait($fraisHorsForfait);

            return $this->redirect('./FicheDeFrais');


        }

    }
}
   
 

