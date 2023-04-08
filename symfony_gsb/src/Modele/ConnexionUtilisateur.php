<?php
namespace App\Modele;
use PDO;


class ConnexionUtilisateur {

    public static function connecterComptable($login, $mdp){
        try {
    
            /*$bd = ConnexionBdd::getConnexion();*/
            $bd = new PDO(
    
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
    
            $sql = 'select id ,nom , prenom '
            . 'from Comptable '
            . 'where login = :login '
            . 'and mdp = :mdp' ;
            
                
        $st = $bd -> prepare( $sql ) ;
    
        $st -> execute( array( 
                                ':login' => $login ,
                                ':mdp' => $mdp 
                        ) 
                    ) ;
        $resultat = $st -> fetch(PDO::FETCH_ASSOC);
    
        return $resultat;
        }
    
        catch( PDOException $e ){
    
            die("Erreur : " . $e->getMessage());
            header( 'Location: ../index.php?echec=0' ) ;
        }
    } 
    
}


?>