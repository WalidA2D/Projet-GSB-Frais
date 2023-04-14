<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Modele\ConnexionUtilisateur;
use App\Modele\SuivreFicheFrais_Comptable;


class ComptableController extends AbstractController
{
    public function connexion(): Response
    {
        $status = session_status();

        if($status == PHP_SESSION_ACTIVE){
            session_start();
            session_destroy();
        }
        
        return $this->render('comptable/connexionComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]); 
    }
    
    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        
        $user = ConnexionUtilisateur::connecterComptable($login, $mdp);


        if($user!= FALSE){

            $status = session_status();

            if($status == PHP_SESSION_NONE){
                session_start();
                $_SESSION[ "idComptable" ] = $user[ "id" ] ;
                $_SESSION[ "nomComptable" ] = $user[ "nom" ] ; 
                $_SESSION[ "prenomComptable" ] = $user[ "prenom" ] ; 
                return $this->redirect('./Accueil');
            }else
            if($status == PHP_SESSION_ACTIVE){
                //Destroy current and start new one
                session_destroy();
                session_start();
                $_SESSION[ "idComptable" ] = $user[ "id" ] ;
                $_SESSION[ "nomComptable" ] = $user[ "nom" ] ; 
                $_SESSION[ "prenomComptable" ] = $user[ "prenom" ] ; 
                
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

            return $this->render('comptable/accueilComptable.html.twig', [
                'controller_name' => 'ComptableController',
            ]);
        }
    }

    public function formulaireFicheFrais(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('comptable/formulaireFicheFrais.html.twig', [
            'controller_name' => 'ComptableController'            
            ]);
        }

        
    }

    

    public function formulaireValiderFicheFrais(): Response
    {
 
            $mois = $_POST[ 'mois' ] ;
            $idVisiteur = $_POST[ 'idVisiteur' ] ;
    
            $ficheFrais = SuivreFicheFrais_Comptable::formulaireComptable($mois, $idVisiteur) ;
            
    
            if($ficheFrais!= null){
    
                $status = session_status();
    
                if($status == PHP_SESSION_NONE){
                
                    session_start();
                    $_SESSION[ "idVisiteur" ] = $ficheFrais[ "idVisiteur" ] ;
                    $_SESSION[ "mois" ] = $ficheFrais[ "mois" ] ;
                    $_SESSION[ "nbJustificatifs" ] = $ficheFrais[ "nbJustificatifs" ] ;
                    $_SESSION[ "montantValide" ] = $ficheFrais[ "montantValide" ] ;
                    $_SESSION[ "dateModif" ] = $ficheFrais[ "dateModif" ] ;
                    $_SESSION[ "idEtat" ] = $ficheFrais[ "idEtat" ] ;
                    
                    return $this->redirect('./SuivreFicheFrais');
                }else
                if($status == PHP_SESSION_ACTIVE){
                    //Destroy current and start new one
                    session_destroy();
                    session_start();
                    $_SESSION[ "idVisiteur" ] = $ficheFrais[ "idVisiteur" ] ;
                    $_SESSION[ "mois" ] = $ficheFrais[ "mois" ] ;
                    $_SESSION[ "nbJustificatifs" ] = $ficheFrais[ "nbJustificatifs" ] ;
                    $_SESSION[ "montantValide" ] = $ficheFrais[ "montantValide" ] ;
                    $_SESSION[ "dateModif" ] = $ficheFrais[ "dateModif" ] ;
                    $_SESSION[ "idEtat" ] = $ficheFrais[ "idEtat" ] ;
    
                    return $this->redirect('./SuivreFicheFrais');
                }
            }
            else{
                return $this->redirect('./FormulaireFicheFrais');
            }
        

        
    }

    public function suivreFicheFrais(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            $mois = $_SESSION[ 'mois' ] ;
            $idVisiteur = $_SESSION[ 'idVisiteur' ] ;

            $ficheFrais = SuivreFicheFrais_Comptable::suivreFicheFrais($mois, $idVisiteur);

            

            return $this->render('comptable/suivreFicheFrais.html.twig', [
                'ficheFrais' => $ficheFrais,            
            ]);
        }

        
    }


    public function suivreFicheFraisValider(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{

            $ficheFrais = SuivreFicheFrais_Comptable::suivreFicheFraisValider();

            

            return $this->render('comptable/suivreFicheFraisValider.html.twig', [
                'ficheFrais' => $ficheFrais,            
            ]);
        }

        
    }

    



    public function modif(): Response
    {
        
        
            $status = session_status();
            if($_SESSION == NULL){
                return $this->redirect('/Comptable/Connexion');
            }else{
                if($status == PHP_SESSION_NONE){
                
                    session_start();
                    $idVisiteur = $_POST[ 'idVisiteur' ] ;
                    $mois = $_POST[ 'mois' ] ;
                    $_SESSION[ "idVisiteur" ] = $idVisiteur ;
                    $_SESSION[ "mois" ] = $mois ;
            
                    $rembourse = SuivreFicheFrais_Comptable::infoPourModif($mois, $idVisiteur);
                    $ficheFrais = SuivreFicheFrais_Comptable::suivreFicheFraisValider();
                    return $this->render('comptable/modifierFicheFrais.html.twig', [
                    'controller_name' => 'ComptableController',
                    'ficheFrais' => $ficheFrais, 
                    ]);
                }else
                if($status == PHP_SESSION_ACTIVE){
                    //Destroy current and start new one
                    session_destroy();
                    session_start();
                    $idVisiteur = $_POST[ 'idVisiteur' ] ;
                    $mois = $_POST[ 'mois' ] ;
                    $_SESSION[ "idVisiteur" ] = $idVisiteur ;
                    $_SESSION[ "mois" ] = $mois ;
            

                    $rembourse = SuivreFicheFrais_Comptable::infoPourModif($mois, $idVisiteur);
                    $ficheFrais = SuivreFicheFrais_Comptable::suivreFicheFraisValider();

                    return $this->render('comptable/modifierFicheFrais.html.twig', [
                    'controller_name' => 'ComptableController',
                    'ficheFrais' => $ficheFrais, 
                    ]);
                }

                
            }

        
    }

    public function modifierFicheFrais(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            $mois = $_SESSION[ 'mois' ] ;
            $idVisiteur = $_SESSION[ 'idVisiteur' ] ;
            $nbJustificatifs = $_GET[ 'nbJustificatifs' ] ;
            $montantValide = $_GET[ 'montantValide' ] ;
    
            $modif = SuivreFicheFrais_Comptable::modifierFicheFrais($nbJustificatifs, $montantValide, $mois, $idVisiteur);
    
            
            if($modif != null){
                return $this->redirect('.');
            }
            else{
                return $this->redirect('.');
            }
        }

        
    }

    public function validerFicheFrais(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            $mois = $_SESSION[ 'mois' ] ;
            $idVisiteur = $_SESSION[ 'idVisiteur' ] ;
            
    
            $modif = SuivreFicheFrais_Comptable::validerFicheFrais($mois, $idVisiteur);
    
            
            if($modif != null){
                return $this->redirect('.');
            }
            else{
                return $this->redirect('.');
            }
        }

        
    }

    public function detailFicheFrais(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            $mois = $_SESSION[ 'mois' ] ;
            $idVisiteur = $_SESSION[ 'idVisiteur' ] ;
    
            $ficheFrais=SuivreFicheFrais_Comptable::detailFicheFraisForfait($mois, $idVisiteur);
            $ficheHorsFrais=SuivreFicheFrais_Comptable::detailFicheFraisHorsForfait($mois, $idVisiteur);
    
            
    
            return $this->render('comptable/detailFicheFrais.html.twig', [
                'ficheFrais' => $ficheFrais,   
                'ficheHorsFrais' => $ficheHorsFrais,         
            ]);
        }

        
    }

    public function detailFicheFraisValider(): Response
    {   
           $status = session_status();
            if($_SESSION == NULL){
                return $this->redirect('/Comptable/Connexion');
            }else{
                if($status == PHP_SESSION_NONE){
                
                    session_start();
                    $idVisiteur = $_POST[ 'idVisiteur' ] ;
                    $mois = $_POST[ 'mois' ] ;
                    $_SESSION[ "idVisiteur" ] = $idVisiteur ;
                    $_SESSION[ "mois" ] = $mois ;
            
                    $ficheFrais=SuivreFicheFrais_Comptable::detailFicheFraisForfait($mois, $idVisiteur);
                    $ficheHorsFrais=SuivreFicheFrais_Comptable::detailFicheFraisHorsForfait($mois, $idVisiteur);
    
            
    
                    return $this->render('comptable/detailFicheFraisValider.html.twig', [
                    'ficheFrais' => $ficheFrais,   
                    'ficheHorsFrais' => $ficheHorsFrais,         
                    ]);
                }else
                if($status == PHP_SESSION_ACTIVE){
                    //Destroy current and start new one
                    session_destroy();
                    session_start();
                    $idVisiteur = $_POST[ 'idVisiteur' ] ;
                    $mois = $_POST[ 'mois' ] ;
                    $_SESSION[ "idVisiteur" ] = $idVisiteur ;
                    $_SESSION[ "mois" ] = $mois ;
            

                    $ficheFrais=SuivreFicheFrais_Comptable::detailFicheFraisForfait($mois, $idVisiteur);
                    $ficheHorsFrais=SuivreFicheFrais_Comptable::detailFicheFraisHorsForfait($mois, $idVisiteur);
    
            
    
                    return $this->render('comptable/detailFicheFraisValider.html.twig', [
                    'ficheFrais' => $ficheFrais,   
                    'ficheHorsFrais' => $ficheHorsFrais,         
                    ]);
                }

                
            }

        
    }



    public function rembourserFicheFrais(): Response
    {
        

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            $idVisiteur = $_POST[ 'idVisiteur' ] ;
            $mois = $_POST[ 'mois' ] ;
    
            $rembourse = SuivreFicheFrais_Comptable::rembourserFicheFrais($idVisiteur, $mois);
            $ficheFrais = SuivreFicheFrais_Comptable::suivreFicheFraisValider();
            
            return $this->render('comptable/suivreFicheFraisValider.html.twig', [
                'ficheFrais' => $ficheFrais, 
            ]);
        }

        
    }


    public function killFormulaire(): Response{
        $_SESSION[ "idVisiteur" ] = "" ;
                    $_SESSION[ "mois" ] = "" ;
                    $_SESSION[ "nbJustificatifs" ] = "" ;
                    $_SESSION[ "montantValide" ] = "";
                    $_SESSION[ "dateModif" ] = "" ;
                    $_SESSION[ "idEtat" ] = "";
        return $this->redirect('/Comptable/FormulaireFicheFrais');
    }

    public function killDetail(): Response{
        $_SESSION[ "idVisiteur" ] = "" ;
        $_SESSION[ "mois" ] = "" ;
                  
        return $this->redirect('/Comptable/SuivreFicheFrais/SuivreValide');
    }

}

