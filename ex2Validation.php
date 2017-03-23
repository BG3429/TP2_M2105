<html>
    <head><title>Page d'accueil</title></head>
    <body>
		<br>
        <form name="connexion" method="post" action=ex2Validation.php>
		Nom:<input type="text" name="nom" id="nom"> <input name="valider" type="submit" value="Valider"><br>
		<input type="checkbox" name="memoire" value="memoire"> M&eacutemoriser l'utilisateur<br>
		</form>
		
		<?php
		if ($_POST['nom']!=""){
			if(isset($_POST["memoire"])){
				setcookie("nom", $_POST['nom'], time()+1*5);
			echo '<br> Cookies enregistr&eacutees: <br>'.$_COOKIE['nom'];
			}
		}
		else{
			echo '<br> Cookies enregistr&eacutees: <br>'.$_COOKIE['nom'];
		}
		
		
		
        if(isset($_POST['valider'])){
            $nom=$_POST['nom'];
			
			$user=$nom;
			echo '<hr>';
			echo 'Bonjour <b>'.$user.'</b>';

		}
		
		?>
    </body>
</html>
