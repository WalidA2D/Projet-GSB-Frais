<?php
namespace App\Controller;
use PDO;
use App\Controller\classes;
function connecterVisiteur($login, $mdp){
    try {

        /*$bd = ConnexionBdd::getConnexion();*/

        $bd = new PDO(

            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        );

            $sql = 'select nom , prenom '
            . 'from Visiteur '
            . 'where login = :login '
            . 'and mdp = :mdp' ;
            
                
            $st = $bd -> prepare( $sql ) ;

            $st -> execute( array( 
                                    ':login' => $login ,
                                    ':mdp' => $mdp 
                            ) 
                        ) ;
            $resultat = $st -> fetchall() ;

            if( count( $resultat ) == 1 ) {
                return $resultat;
            }
            else{
                return null;
            }

        }

    catch( PDOException $e ){

        die("Erreur : " . $e->getMessage());
        header( 'Location: ../index.php?echec=0' ) ;
    }
} 

function connecterComptable($login, $mdp){
    try {

        /*$bd = ConnexionBdd::getConnexion();*/
        $bd = new PDO(

            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        );

        $sql = 'select nom , prenom '
        . 'from Comptable '
        . 'where login = :login '
        . 'and mdp = :mdp' ;
        
            
    $st = $bd -> prepare( $sql ) ;

    $st -> execute( array( 
                            ':login' => $login ,
                            ':mdp' => $mdp 
                    ) 
                ) ;
    $resultat = $st -> fetchall() ;

    if( count( $resultat ) == 1 ) {
        return $resultat;
    }
    else {
        return null;
    }
    }

    catch( PDOException $e ){

        die("Erreur : " . $e->getMessage());
        header( 'Location: ../index.php?echec=0' ) ;
    }
} 

       
?>