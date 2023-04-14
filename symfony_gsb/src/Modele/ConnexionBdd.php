<?php
namespace App\Modele;
use PDO;
/* final = constante */
/* static = attribue de classe */ 
   class ConnexionBdd{

        private static $connexion = null ;
        
        private function __construct(){
            self::$connexion = new PDO( 'mysql:host=localhost;dbname=gsbFrais' ,'adminGsb' ,'azerty' ) ;
        }

        private static function getConnexion(){
            if( self::$connexion == null ){
                new ConnexionBdd() ;
            }
            return self::$connexion ;
        }

        public static function connecterVisiteur($login, $mdp){
            try {
        
                $bd = ConnexionBdd::getConnexion();
        
                    $sql = 'select id, nom , prenom '
                    . 'from Visiteur '
                    . 'where login = :login '
                    . 'and mdp = :mdp' ;
                    
                        
                    $st = $bd -> prepare( $sql ) ;
        
                    $st -> execute( array( 
                                            ':login' => $login ,
                                            ':mdp' => $mdp 
                                    ) 
                                ) ;
                    $resultat = $st -> fetch(PDO::FETCH_ASSOC) ;

                    $st->closeCursor() ;
                    return $resultat;

        
                }

                catch( PDOException $e ){

                    die("Erreur : " . $e->getMessage());
                    header( 'Location: ../index.php?echec=0' ) ;
                }
            }


            public static function connecterComptable($login, $mdp){
                try {
                            
                    $bd = ConnexionBdd::getConnexion();
            
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
                $resultat = $st -> fetch(PDO::FETCH_ASSOC) ;
    
                $st->closeCursor() ;
                return $resultat;
                }
            
                catch( PDOException $e ){
            
                    die("Erreur : " . $e->getMessage());
                    header( 'Location: ../index.php?echec=0' ) ;
                }
            } 

        
            
            public static function getLigneFicheFrais($idVisiteur, $mois){

                try{
        
                    $bd = ConnexionBdd::getConnexion();
    
                    $sql = 'select quantite, libelle, montant from FicheFrais as f inner join ( select libelle, montant, quantite, e.idVisiteur, e.mois from LigneFraisForfait as e inner join FraisForfait as a on e.idFraisForfait  = a.id) as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = :idVisiteur  and f.mois = :mois' ;

                    $st = $bd -> prepare($sql);
                    $st -> execute(array(':idVisiteur' => $idVisiteur,':mois' => $mois)) ;
                    $ligneFicheFrais = $st -> fetchall() ;	
        
                    return $ligneFicheFrais;
                }
                
    
                catch( PDOException $e ){
    
                    die("Erreur : " . $e->getMessage());
                    header( 'Location: ../index.php?echec=0' ) ;
                }
            }


            public static function getLigneFicheFraisHF($idVisiteur, $mois){

                try{
        
                    $bd = ConnexionBdd::getConnexion();
    
                    $sql = ' select id, dateModif, libelle, montant from FicheFrais as f inner join LigneFraisHorsForfait as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = :idVisiteur and f.mois= :mois ' ;

                    $st = $bd -> prepare($sql);
                    $st -> execute(array(':idVisiteur' => $idVisiteur,':mois' => $mois)) ;
                    $ligneFicheFraisHF = $st -> fetchall() ;	
        
                    return $ligneFicheFraisHF;
                }
                
    
                catch( PDOException $e ){
    
                    die("Erreur : " . $e->getMessage());
                    header( 'Location: ../index.php?echec=0' ) ;
                }
            }


        
            


        public static function verifInsertFicheFrais($idVisiteur){

            try{
            
                $bd = ConnexionBdd::getConnexion();


                $user = array(':idVisiteur' => $idVisiteur
                            );
                            
                $sql = 'select count(idVisiteur) from FicheFrais WHERE idVisiteur = :idVisiteur AND idEtat = "CR" ';
    
                $query = $bd->prepare($sql);
            
                $query-> execute($user);
            
                $resultat = $query -> fetch(PDO::FETCH_ASSOC) ;
            
                return $resultat["count(idVisiteur)"];
            }


            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }

        }



        public static function verifEtatFicheFrais($idVisiteur){

            try{
            
                $bd = ConnexionBdd::getConnexion();


                $user = array(':idVisiteur' => $idVisiteur
                            );
                            
                $sql = 'select count(idVisiteur) from FicheFrais WHERE idVisiteur = :idVisiteur AND idEtat LIKE "VA"';
    
                $query = $bd->prepare($sql);
            
                $query-> execute($user);
            
                $resultat = $query -> fetch(PDO::FETCH_ASSOC) ;
            
                return $resultat["count(idVisiteur)"];
            }

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }

        }


        public static function insertFicheFrais($idVisiteur) {

            try{
                $bd = ConnexionBdd::getConnexion();

                $date = date('m-Y');
                $dateModif = date('Y-m-d');
                $mois_num = intval(explode('/', $date)[0]);
                setlocale(LC_TIME, 'fr_FR.utf8');
                $mois_nom = ucfirst(strftime('%B', mktime(0, 0, 0, $mois_num, 1)));
            
    
                $user = array(':idVisiteur' => $idVisiteur ,
                                ':mois' => $mois_nom ,
                                ':AnneeMois' => $date,
                                ':dateModif' => $dateModif

                            );
                            
                $sql = 'insert into FicheFrais(idVisiteur,mois,AnneeMois,dateModif)' . 'values(:idVisiteur,:mois, :AnneeMois,:dateModif)';
                
                
                $query = $bd->prepare($sql);
                
                return $query->execute($user);
            }
            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function verifMontantETP($montantETP){

            try{
                if($montantETP == 0 ){
                    return  null;
                }else{
                    $libelleETP = "ETP";
                    $ETP = array(
                        "montantETP" => $montantETP,
                        "libelleETP" => $libelleETP
                    );
                    return $ETP;
                }
            }

            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function verifMontantKM($montantKM){

            try{
                if($montantKM == 0 ){
                    return  null;
                }else{
                    $libelleKM = "KM";
                    $KM = array(
                        "montantKM" => $montantKM,
                        "libelleKM" => $libelleKM
                    );
                    return $KM;
                }
            }

            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function verifMontantNUI($montantNUI){

            try{
                if($montantNUI == 0 ){
                    return  null;
                }else{
                    $libelleNUI = "NUI";
                    $NUI = array(
                        "montantNUI" => $montantNUI,
                        "libelleNUI" => $libelleNUI
                    );
                    return $NUI;
                }
            }

            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function verifMontantREP($montantREP){

            try{
                if($montantREP == 0 ){
                    return  null;
                }else{
                    $libelleREP = "REP";
                    $REP = array(
                        "montantREP" => $montantREP,
                        "libelleREP" => $libelleREP
                    );
                    return $REP;
                }
    
            }

            
            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function insertLigneFraisForfait($idVisiteur,$montant,$idFraisForfait){
            try{
                $bd = ConnexionBdd::getConnexion();

                $date = date('m-Y');

                $mois_num = intval(explode('/', $date)[0]);
                setlocale(LC_TIME, 'fr_FR.utf8');
                $mois_nom = ucfirst(strftime('%B', mktime(0, 0, 0, $mois_num, 1)));
    
                $user = array(':idVisiteur' => $idVisiteur ,
                                ':mois' => $mois_nom,
                                ':AnneeMois' => $date,
                                ':idFraisForfait' => $idFraisForfait,
                                ':quantite' => $montant
                            );
                            
                $sql = 'insert into LigneFraisForfait ' . 'values (:idVisiteur, :mois, :AnneeMois, :idFraisForfait, :quantite) ';
                
                
                $query = $bd->prepare($sql);
                
                return $query->execute($user);
            }
            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function updateLigneFraisForfait($idVisiteur,$montant,$idFraisForfait){
            
            try{
                $bd = ConnexionBdd::getConnexion();

                $date = date('m-Y');
                
    
                $user = array(':idFraisForfait'=>$idFraisForfait, ':quantite'=>$montant, ':idVisiteur'=>$idVisiteur, ':date'=>$date);
    
                $sql = 'update LigneFraisForfait '
                . 'set quantite = :quantite '
                . 'where idFraisForfait = :idFraisForfait '
                . 'and idVisiteur = :idVisiteur '
                . 'and AnneeMois = :date '; 
    
                $query = $bd->prepare($sql);
                
                return $query->execute($user);
            }
            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }

        public static function insertLigneFraisHorsForfait($idVisiteur,$date2,$libelle,$montant){

            try{
                $bd = ConnexionBdd::getConnexion();

                $date = date('m-Y');
                $mois_num = intval(explode('/', $date)[0]);
                setlocale(LC_TIME, 'fr_FR.utf8');
                $mois_nom = ucfirst(strftime('%B', mktime(0, 0, 0, $mois_num, 1)));

                
                $user = array(':idVisiteur' => $idVisiteur ,
                                ':mois' => $mois_nom,
                                ':AnneeMois' => $date,
                                ':libelle' => $libelle,
                                ':date' => $date2,
                                ':montant' => $montant
                            );
                                   
                $sql = 'insert into LigneFraisHorsForfait(idVisiteur, mois, AnneeMois,libelle,date,montant) ' . 'values (:idVisiteur, :mois, :AnneeMois, :libelle, :date, :montant) ';
                
                
                $query = $bd->prepare($sql);
            
                $query->execute($user);
            }
            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
            
            
        }

        public static function getLigneFraisHorsForfait($idVisiteur){

            try{

                $date = date("m-Y"); 

                $bd = ConnexionBdd::getConnexion();

                $sql = 'select id, libelle, date, montant'.' from LigneFraisHorsForfait'.' where idVisiteur = :idVisiteur and AnneeMois = :date' ;
                $st = $bd -> prepare($sql);
                $st -> execute(array(':idVisiteur' => $idVisiteur,':date' => $date)) ;
                $ligneFraisHorsForfaits = $st -> fetchall() ;	
    
                return $ligneFraisHorsForfaits;
            }
            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


        public static function getQuantiteLibelle($idVisiteur){

            try{

                $date = date("m-Y"); 

                $bd = ConnexionBdd::getConnexion();

                $sql = 'select LFF.idFraisForfait, FF.libelle, LFF.quantite'.' from FraisForfait FF'.' inner join LigneFraisForfait AS LFF'.' ON FF.id = LFF.idFraisForfait'.' where idVisiteur like :idVisiteur '. 'and LFF.AnneeMois = :date' ;
                $st = $bd -> prepare($sql);
                $st -> execute(array(':idVisiteur' => $idVisiteur, ':date' => $date)) ;
                $quantiteLibelle = $st -> fetchall() ;	
    
                return $quantiteLibelle;
            }
            

            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }

        public static function deleteLigneHorsForfait($fraisHorsForfait){

            try{
                $bd = ConnexionBdd::getConnexion();
    
                $st = array(':fraisHorsForfait' => $fraisHorsForfait);
                                   
                $sql = 'delete from LigneFraisHorsForfait ' . 'where id = :fraisHorsForfait';
                
                $query = $bd->prepare($sql);
            
                $query->execute($st);
            }
            
            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }

        public static function clotureFicheFrais($idVisiteur){

            try {
        
                $bd = ConnexionBdd::getConnexion();
        
                    $sql = 'select AnneeMois '
                    . 'from FicheFrais '
                    . 'where idVisiteur like :idVisiteur '
                    . 'and idEtat like "CR"' ;
                    
                        
                    $st = $bd -> prepare( $sql ) ;
        
                    $st -> execute( array( ':idVisiteur' => $idVisiteur ) ) ;
                    $resultat = $st -> fetch(PDO::FETCH_ASSOC) ;


                    if(!empty($resultat)){
                        $date = date("m-Y"); 
                        if($date > $resultat['AnneeMois']){

                            try{
                                $bd = ConnexionBdd::getConnexion();
                                    
                                $user = array(':idVisiteur'=>$idVisiteur, ':resultat'=>$resultat["AnneeMois"]);
                    
                                $sql = 'update FicheFrais '
                                . 'set idEtat = "CL" '
                                . 'where idVisiteur = :idVisiteur '
                                . 'and AnneeMois = :resultat '; 
                    
                                $query = $bd->prepare($sql);
                                
                                return $query->execute($user);
                            }
                            
                
                            catch( PDOException $e ){
                
                                die("Erreur : " . $e->getMessage());
                                header( 'Location: ../index.php?echec=0' ) ;
                            }

                        }
                    }
        
                }

                catch( PDOException $e ){

                    die("Erreur : " . $e->getMessage());
                    header( 'Location: ../index.php?echec=0' ) ;
                }

        }


    }

?>