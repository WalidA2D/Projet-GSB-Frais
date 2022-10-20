<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ; 								// Creer la vue v_entete.php 
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;	// Creer le contrôleur c_connexion.php
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;	// Creer le controleur c_gererFrais.php
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 	// Creer le contrôleur c_etatFrais.php
	}
}
include("vues/v_pied.php") ;					// Creer la vue v_pied.php
?>

