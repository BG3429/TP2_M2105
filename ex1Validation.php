<html>
    <head>
	<title>Page d'accueil</title>
	
	</head>
    <body>
        <form name="connexion" method="post" action=ex1Validation.php>
		Nom:<input type="text" name="nom" id="nom"> <input name="valider" type="submit" value="Valider">
		</form>
		
		<?php
		session_start();
        if(isset($_POST['valider'])){
			$_SESSION['nom']=$_POST['nom'];
            $nom=$_POST['nom'];
			
			$user=$nom;
			echo 'Bonjour <b>'.$user.'</b>';
		}
		?>
    </body>
</html>
