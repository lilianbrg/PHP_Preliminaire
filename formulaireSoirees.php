

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Equipe Boite de nuit
		</title>
		
		<link rel="stylesheet" href="styleBoite.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			<a id ="inactive" class="nav-link" href="accueilBoite.php">Accueil</a>
			
			<a id ="inactive" class="nav-link " href="equipe.php">Equipe</a>
			<a id ="inactive" class="nav-link " href="soirees.php">Soirées</a>
			<a id ="inactive" class="nav-link " href="fiches.php">Fiches Clients</a>
			<a id ="inactive" class="nav-link " href="stocks.php">Gestion des stocks</a>
			<a id ="inactive" class="nav-link" href="login.php">Déconnexion</a>
			
			
			
					
		
		
		</nav>
		
		<section id="bas">
		
		<form method="post" action="equipe.php">
		
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Formulaire pour ajouter un membre de l'équipe :</th>
        
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label for="theme" > Thème : </label></td>
            <td><input type="text" name="nomEmploye"/></td>
            
		   </tr>
		   <tr>
            <td><label for="localisation" > Localisation : </label></td>
            <td><SELECT name="localisation" size="1">
					<OPTION>Paris
					<OPTION>Biarritz
				</SELECT>
			</td>
            
		   </tr>
		   <tr>
            <td><label for="duree" > Durée : </label></td>
            <td><input type="text" name="email"/></td>
            
		   </tr>
		   
		   <tr>
            <td><label for="date" > Date : </label></td>
            <td><input type="text" name="Salaire"/></td>
            
		   </tr>
		   
          
        </tbody>
      </table>
			
			
			<input type="submit" value="Valider" onclick=window.location.href='formulaireSoirees.php'/>
		</form>
		</section>
		
	</body>

</html>
	
