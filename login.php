<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="styleBoite.css" media="screen" type="text/css" />
		
		
		<title>
			Boite
		</title>
		
		
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="connection.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Identifiant</b></label>
                <input type="text" placeholder="Entrer votre Identifiant" name="id" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
				
				<a href="mdp_oublié.html" > Mot de passe oublié </a>

                <input type="submit" id='submit' value='Se connecter' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
				
            </form>
        </div>
    </body>
</html>