<html>
    <head><title>Page d'accueil</title></head>
    <body>
        <form name="connexion" method="post" action=allSessionVars.php>
		Nom:<input type="text" name="nom" id="nom"> <input name="valider" type="submit" value="Valider">
		</form>
		
		<?php
        if(isset($_POST['valider'])){
            $nom=$_POST['nom'];
			
			$user=$nom;
			
		}
		echo 'Toutes les variables <br>'.'Nom = '.$nom.'<br>'.'User = '.$user;
		?>
    </body>
</html>
