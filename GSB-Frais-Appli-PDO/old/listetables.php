<?php  
	//d�marre la gestion des sessions
	session_start();
	//r�cup�re le nom de l'ODBC saisi dans le formulaire de choix
	if (isset($_GET["dsn"]) ) {		
		$_SESSION["dsn"] = $_GET["dsn"];
		$_SESSION["chemin"]= $_GET["chemin"];
	}
	//utilise la source ODBC r�cup�r�e ou d�j� en Session
	if (isset($_SESSION["dsn"])) {
		include ("classGesTables.php");
		//connexion en ODBC � une base de donn�es avec la Classe cGestTables
		$cnx = new cGesTables ;	
		$cnx->connecte($_SESSION["dsn"], "root","");	
		//se place dans le dossier de destination
		$cnx->dossier($_SESSION["chemin"]);
		//si la connexion a r�ussi
		if ($cnx->getConnexion()!=null) {			
			//affiche le formulaire des tables de la base
			$cnx->afficheTables('listetables.php');
			//agit en fonction de ce qui a �t� selectionn� dans la liste
			if (isset($_GET['lesTables'])) {
				echo $_GET['lesTables'];   //nom de la table s�lectionn�e
				//g�n�ration du fichier formulaire
				$fic = fopen("form".$_GET['lesTables'].".htm","w");
				$cnx->ecritEntete($fic,'formulaire '.$_GET['lesTables']);
				$cnx->ecritFormulaire( $_GET['lesTables'],"form".$_GET['lesTables'],'recup'.$_GET['lesTables'].".php","post",$fic);
				$cnx->afficheStructure( $_GET['lesTables']);
				$cnx->ecritPied($fic);			
				fclose($fic);
				echo '<br /> Voir le formulaire : '.$_SESSION["chemin"].'\form'.$_GET['lesTables'].'.htm';
				//g�n�ration du fichier PHP de r�cup�ration des donn�es du formulaire
				$ficPHP= fopen('recup'.$_GET['lesTables'].".php","w");
				$cnx->ecritRecupForm( $_GET['lesTables'],"POST",$ficPHP);
				fclose($ficPHP);
				echo '<br /> Voir le fichier de r�cup�ration des donn�es : '.$_SESSION["chemin"].'\recup'.$_GET['lesTables'].'.php';
				}
		}
		else {echo "Connexion �chou�e";}	
	}
	else echo 'Vous devez d\'abord choisir un ODBC : cliquez <a href="choixODBC.php">ici</a>';
	   
?>