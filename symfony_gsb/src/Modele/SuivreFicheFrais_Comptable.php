<?php
namespace App\Modele;
use PDO;

class SuivreFicheFrais_Comptable {

    public static function formulaireComptable($mois, $idVisiteur){
        try {
    
            /*$bd = ConnexionBdd::getConnexion();*/
            $bd = new PDO(
    
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
    
            $sql = 'select * '
                . 'from FicheFrais '
                . 'where idVisiteur = :idVisiteur '
                . 'and mois = :mois';
            
                
        $st = $bd -> prepare( $sql ) ;
    
        $st -> execute( array( 
                                ':idVisiteur' => $idVisiteur ,
                                ':mois' => $mois 
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
    
    public static function suivreFicheFrais($mois, $idVisiteur){
        try {
    
            /*$bd = ConnexionBdd::getConnexion();*/
    
            $bd = new PDO(
    
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
    
                $sql = 'select * '
                . 'from FicheFrais '
                . 'where idVisiteur = :idVisiteur '
                . 'and mois = :mois';
                
                    
                $st = $bd -> prepare( $sql ) ;
    
                $st -> execute( array( 
                                    ':mois' => $mois ,
                                    ':idVisiteur' => $idVisiteur 
    
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

    public static function suivreFicheFraisValider(){
        try {
    
            $bd = new PDO(
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
    
            $sql = 'SELECT * FROM FicheFrais WHERE idEtat IN ("VA", "RB", "MP")';
            $st = $bd->prepare($sql);
            $st->execute();
            $resultat = $st->fetchAll(PDO::FETCH_ASSOC);
    
            return $resultat;
    
        } catch(PDOException $e) {
    
            die("Erreur : " . $e->getMessage());
            header('Location: ../index.php?echec=0');
        }
    } 
    
    public static function modifierFicheFrais($nbJustificatifs, $montantValide, $mois, $idVisiteur){
            
        try {
            $bd = new PDO(
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
            $sql = 'update FicheFrais ' 
                . 'set nbJustificatifs = :nbJustificatifs ' 
                . ', montantValide = :montantValide '
                . ', dateModif = date( now() ) '
                . ', idEtat = "MP" '
                . 'where idVisiteur = :idVisiteur '
                . 'and mois = :mois';
    
    
            $st = $bd -> prepare( $sql ) ;
    
            return $st -> execute(array(
                              ':mois' => $mois ,
                              ':idVisiteur' => $idVisiteur ,
                              ':nbJustificatifs' => $nbJustificatifs ,
                              ':montantValide' => $montantValide 
                            )
                        ) ;
            
            
        }
        catch( PDOException $e ){
              die("Erreur : " . $e->getMessage());
              header( 'Location: ../index.php?echec=0' ) ;
        }
    } 

    public static function validerFicheFrais($mois, $idVisiteur){
            
        try {
            $bd = new PDO(
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
            $sql = 'update FicheFrais ' 
                . 'set idEtat = "VA" ' 
                . 'where idVisiteur = :idVisiteur '
                . 'and mois = :mois';
    
    
            $st = $bd -> prepare( $sql ) ;
    
            return $st -> execute(array(
                              ':mois' => $mois ,
                              ':idVisiteur' => $idVisiteur ,
                            )
                        ) ;
            
            
        }
        catch( PDOException $e ){
              die("Erreur : " . $e->getMessage());
              header( 'Location: ../index.php?echec=0' ) ;
        }
    } 
    
    public static function rembourserFicheFrais($idVisiteur, $mois){
    try {
        $bd = new PDO(
            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        );

        $sql = 'update FicheFrais ' 
            . 'set idEtat = :idEtat '
            . ', dateModif = date( now() ) '
            . 'where idVisiteur = :idVisiteur '
            . 'and mois = :mois';

        $st = $bd -> prepare($sql);
    
        $st->execute(array(
            ':idEtat' => "RB",
            ':idVisiteur' => $idVisiteur,
            ':mois' => $mois 
        ));

        return true;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
        header('Location: ../index.php?echec=0');
    }

}
    
public static function detailFicheFraisForfait($mois, $idVisiteur){
    try {

        $bd = new PDO(
            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        );

        $sql = 'select * from LigneFraisForfait'
                . ' where idVisiteur = :idVisiteur '
                . 'and mois = :mois';
        
            
        $st = $bd -> prepare( $sql ) ;

        $st -> execute( array( 
            ':idVisiteur' => $idVisiteur ,
            ':mois' => $mois 
        ));
        
        $resultats = $st -> fetchAll(PDO::FETCH_ASSOC);

        return $resultats;
    }

    catch( PDOException $e ){

        die("Erreur : " . $e->getMessage());
        header( 'Location: ../index.php?echec=0' ) ;
    }
}

    
    public static function detailFicheFraisHorsForfait($mois, $idVisiteur){
        try {
    
            $bd = new PDO(
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
    
            $sql = 'select * from LigneFraisHorsForfait'
                    . ' where idVisiteur = :idVisiteur '
                    . 'and mois = :mois';
    
            $st = $bd -> prepare( $sql ) ;
    
            $st -> execute( array( 
                                    ':idVisiteur' => $idVisiteur ,
                                    ':mois' => $mois 
                            ) 
                        ) ;
    
            $resultat = $st -> fetchAll(PDO::FETCH_ASSOC);
    
            return $resultat;
        }
    
        catch( PDOException $e ){
    
            die("Erreur : " . $e->getMessage());
            header( 'Location: ../index.php?echec=0' ) ;
        }
    }

    public static function infoPourModif($mois, $idVisiteur){
        try {
    
            /*$bd = ConnexionBdd::getConnexion();*/
            $bd = new PDO(
    
                'mysql:host=localhost;dbname=gsbFrais' ,
                'adminGsb' ,
                'azerty'
            );
    
            $sql = 'select * '
                . 'from FicheFrais '
                . 'where idVisiteur = :idVisiteur '
                . 'and mois = :mois';
            
                
        $st = $bd -> prepare( $sql ) ;
    
        $st -> execute( array( 
                                ':idVisiteur' => $idVisiteur ,
                                ':mois' => $mois 
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