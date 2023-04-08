<?php  
/********************************************************************************************
*********************************************************************************************
*******GESTION DE FORMULAIRES HTML ET DE RECUPERATION PHP *****************************
*******AUTEUR : SERGE GUERINET       *****************************
*******V.1 : Cr�� le 03/05/2010      ****************************
*********************************************************************************************
**  Cr�ation de fichier pour la saisie des donn�es d'une table dans un formulaire	**
**  Cr�ation de fichier pour la r�cup�ration des donn�es d'un formulaire correspondant � une table	**
**  Affichage de la structure d'une table											**
*********************************************************************************************
**                                        Version Objet							**
*********************************************************************************************
*********************************************************************************************
*/ 
/*------------------------------------------- D�claration de la classe -------------------------------------------------------------------------------*/
class cGesTables {
/*--------------------------------------------Propri�t�s de la classe  -------------------------------------------------------------------------------*/
var $connexion ; 
var $dsn ="" ;
/*------------------------------------------- Acc�s aux propri�t�s -----------------------------------------------------------------------------------*/
function getConnexion() {return $this->connexion;}
/* ------------------------------------------   Connexion � une base-------------- ------------------------------------------------------------------ */
	function connecte($pNomDSN, $pUtil, $pPasse) {
		//tente d'�tablir une connexion � une base de donn�es 
		$this->connexion = odbc_connect( $pNomDSN , $pUtil, $pPasse );	
		$this->dsn = $pNomDSN;
	}
/*------------------------------------------- Localisation dans un dossier (cr�� �ventuellement) -----------------------------------------------------*/
	function dossier($pDossier) {
		//cr�e un dossier pour contenir les pages g�n�r�es s'il n'existe pas
		if (!file_exists($pDossier)) {mkdir ($pDossier,0700);}
		//se place dans le dossier pour stocker les fichiers g�n�r�s
		chdir($pDossier);
	}
/* ------------------------------------------   Formulaire d'affichage des tables ------------------------------------------------------------------- */
	function afficheTables( $pFichAction) {
		//remplissage de la liste
		$tablelist = odbc_tables($this->connexion);
		echo '<form name="choixTables" method="get" action="'.$pFichAction.'">';
		echo '<select name="lesTables">';
		while (odbc_fetch_row($tablelist)) // tant qu'on n'est pas la fin de la table des objets de la base			
		{		 if (odbc_result($tablelist, 4) == "TABLE" ) // Si l'objet en cours a pour indicateur TABLE                //test � ajouter dans la condition pour ne pas afficher les  tables syst�me en Access     && !(substr(odbc_result($tablelist,3),0,4)=="MSys")
					 echo '<option value="'.odbc_result($tablelist, 3).'">'.odbc_result($tablelist, 3).'</option>'; // Affiche nom de la TABLE					
		}
		echo '</select><input type="submit" value="Afficher"></input></form>' ;		
	}

/* ------------------------------------------   �l�ments de base des fichiers HTML----------------------------------------------------------------------- */	
	function ecritEntete($pFichier, $pTitre) {
		//�crit dans un fichier les ent�tes d'un fichier HTML avec le titre de la page en param�tre
		fputs($pFichier, '<html><head><title>'.$pTitre.'</title><style type="text/css">');
		fputs($pFichier, '<!-- label.titre { width : 180 ;  clear:left; float:left; } .zone { width : 30car ; float : left; } ');
		fputs($pFichier, '--></style></head><body>');
	}
	function ecritPied($pFichier) {
		//�crit dans un fichier la fin d'un document html
		fputs($pFichier, '</body></html>');
	}
/* ------------------------------------------   affichage de la structure d'une table ----------------------------------------------------------------------- */	
	function afficheStructure( $pTable){	
		//affiche dans la page en cours la structure d'une table (champs/type/taille)
		  $result = odbc_do($this->connexion, "select * from ".$pTable);
		  echo "<table border=1>";
		  for ($i=1;$i<odbc_num_fields( $result )+1;$i++) //Affiche les informations
		  {
			  echo "<tr><td>".odbc_field_name($result, $i)."<td>";  // nom du champ
			  echo odbc_field_type($result, $i)."<td>";         // type du champ
			  echo odbc_field_len($result, $i)."</tr>";   // longueur
		  }
		  echo "</table>";
	}
	
/* ------------------------------------------   cr�ation du fichier "formulaire" pour une table----------------------------------------------------------------------- */
	function ecritFormulaire( $pTable, $pNomForm, $pFichAction, $pMethode, $pFichier)
	{ //�crit dans un fichier le code HTML produisant un formulaire pour les champs d'une table d'une base
		$result = odbc_do($this->connexion, "select * from ".$pTable);   //explore les champs de la table
		//�criture des propri�t�s du formulaire
		fputs($pFichier,  '<form name="'.$pNomForm.'" method="'.$pMethode.'" action="'.$pFichAction.'">');  //�crit dans le fichier 
		fputs($pFichier,"\n"); //retour � la ligne
		//parcours des champs de la table
		 for ($i=1;$i<odbc_num_fields( $result )+1;$i++)  {
		   $this->traiteUnChampForm(odbc_field_name($result, $i),odbc_field_type($result, $i), odbc_field_len($result, $i), $pFichier);
		 }
		//�criture du pied de formulaire avec les boutons correspondants
		fputs($pFichier, '<label class="titre"></label><div class="zone"><input type="reset" value="annuler"></input><input type="submit"></input></form>');
	}	
	
	function traiteUnChampForm($pNomChamp, $pTypeChamp, $pLongueur, $pFichier){
		//�crit dans un fichier le code correspondant � une zone de saisie pour un champ donn�
		fputs($pFichier, '<label class="titre">'.$pNomChamp.' :</label>');		
		//en fonction du type, choisit le contr�le correspondant (boolean ou BIT pour Access)
		if ($pTypeChamp=="boolean" || $pTypeChamp=="BIT" ) {
		   fputs($pFichier,'<input type="checkbox"');
		   $fermeture="/>";
		}
		else {
			if ($pLongueur<=50) { //champs textuels de 50 caract�res maximum
				 fputs($pFichier, '<input type="text" size="'.$pLongueur.'"');
				 $fermeture="/>";
				}
			else {//champs textuels de plus de 50 caract�res
					fputs($pFichier, '<textarea rows="'.($pLongueur % 50).'" cols="50"');
					$fermeture="></textarea>";
				  }
		}
		fputs($pFichier, ' name="'.$pNomChamp.'" class="zone" '.$fermeture);
		fputs($pFichier,"\n");
	}
/* ------------------------------------------   cr�ation du fichier "r�cup�ration formulaire" pour une table ----------------------------------------------------------------------- */	
	function ecritRecupform( $pTable, $pMethode, $pFichier) {
		//�crit dans un fichier pFichier le code PHP de r�cup�ration des donn�es d'un formulaire correspondant � une table
		$result = odbc_do($this->connexion, "select * from ".$pTable);   //explore les champs de la table
		//d�but du fichier
		fputs($pFichier,'<?php ');
		fputs($pFichier,"\n"); //retour � la ligne
		 for ($i=1;$i<odbc_num_fields( $result )+1;$i++) 
		  {//�crit le code de r�cup�ration du champ de formulaire 
		   $this->traiteUnChampRecup(odbc_field_name($result, $i), $pMethode, $pFichier);
		  }
		 //fin du code PHP
		fputs($pFichier, '?>');
	}
	
	function traiteUnChampRecup($pNomChamp, $pMethode, $pFichier) {
		//�crit dans un fichier le code de r�cup�ration d'un champ en GET ou POST		
			fputs($pFichier, "$".$pNomChamp."=\$_".$pMethode."['".$pNomChamp."'];");
			//affichage des donn�es r�cup�r�es
			fputs($pFichier,"\n"); //retour � la ligne	
	}
}
?>