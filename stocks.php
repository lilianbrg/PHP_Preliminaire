
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Gestion des stocks Boite de nuit
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
			<a id ="inactive" class="nav-link active" href="stocks.php">Gestion des stocks</a>
			<a id ="inactive" class="nav-link" href="login.php">Déconnexion</a>
			
			
			
					
		
		
		</nav>
		
		<section id="bas">
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Produit</th>
            <th>Quantité</th>
           
			<th> </th>
			<th> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Poliakov</td>
            <td>40</td>
            
			
			<td><button id="orange" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Edit</button></td>
			<td><button id="rouge" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Delete</button></td>


          </tr>
          <tr>
            <td>Saint James</td>
            <td>70</td>
            

			<td><button id="orange" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Modifier</button></td>
			<td><button id="rouge" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Supprimer</button></td>
			
          </tr>
          
        </tbody>
      </table>

			
		
		
		</section>
		<section id="footer">
		
			  <input id="button" type=button class="btn btn-light" title= "Ajouter un produit" onclick=window.location.href='formulaireStocks.php' value= Ajout />

		</section>
	</body>

</html>
	
