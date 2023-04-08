<?php  
	//d�marre la gestion des sessions
	session_start();
	//r�cup�re le nom de l'ODBC saisi dans le formulaire de choix
	if (isset($_GET["id"]) ) {		
		$_SESSION["id"] = $_GET["id"];
		$_SESSION["passe"]= $_GET["passe"];
	}
	//Etablit une connexion avec les coordonn�es pass�es en param�tre
	if (isset($_SESSION["id"])) {
		include ("classAuthentification.php");
		//connexion en ODBC � une base de donn�es avec la Classe cAuthentification
		$cnx = new cAuthentification ;	
		$cnx->connecte("dsn_swiss", "root","");	
		//inidque la table et les chmaps � utiliser
		$cnx->definitChamps("Visiteur","vis_matricule","vis_nom","text");
		//si la connexion a r�ussi
		if ($cnx->getConnexion()!=null) {			
			//v�rifie l'identit� de la personne gr�ce aux coordonn�es fournies ou retourne vers l'identification en indiquant l'erreur
			if ($cnx->verifId($_SESSION["id"],$_SESSION["passe"]))
				{unset($_SESSION["resultat"]);header("Location:Reussi.html");}
			else {$_SESSION["resultat"]=$cnx->getErreur();header("Location:testId.php");}
		}
		else {$_SESSION["resultat"]="Connexion �chou�e";}	
	}
	else echo 'Vous devez d\'abord choisir un ODBC : cliquez <a href="choixODBC.php">ici</a>';
	   
?>