<?php
	$dbHost = '144.21.67.201';
	$dbHostPort ="1521";
	$dbServiceName ="pdbest21.631174089.oraclecloud.internal";
	$usr= 'AUBERT2B20';
	$pswd= 'AUBERT2B2001';
	$dbConnStr = "(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)
	(HOST =".$dbHost.")(PORT = ".$dbHostPort."))
	(CONNECT_DATA = (SERVICE_NAME = ".$dbServiceName.")))";

	$conn = @oci_connect($usr,$pswd , $dbConnStr);

	if (!$conn) {
	   die("Database Connection Error");
	}
	$id = $_POST['identifiant'];
	$mdp = $_POST['password'];
	$nom = $_POST['nomEmploye'];
	$prenom = $_POST['prenomEmploye'];
	$email = $_POST['email'];
	$num = $_POST['numeroEmploye'];
	$stid = oci_parse($conn, "INSERT INTO EMPLOYE (IDENTIFIANT, MDP, NOMEMPLOYE, PRENOMEMPLOYE, EMAILEMPLOYE, DATEAJOUTEMPLOYE, NUMEROEMPLOYE) VALUES(:id,:mdp,:nom,:prenom,:email,TO_DATE('2004/08/13','yyyy/mm/dd'),:num)");
	
	oci_bind_by_name($stid, ':id', $id);
	oci_bind_by_name($stid, ':mdp', $mdp);
	oci_bind_by_name($stid, ':nom', $nom);
	oci_bind_by_name($stid, ':prenom', $prenom);
	oci_bind_by_name($stid, ':email', $email);
	oci_bind_by_name($stid, ':num', $num);

	if ( !   oci_execute($stid)){
      $err = oci_error($stid);
      trigger_error('Insertion failed: '. $err['message'], E_USER_ERROR);

    };
	
	header('Location: equipe.php');
	exit();
?>