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

$stid = oci_parse($conn, 'SELECT * from EMPLOYEE');
oci_execute($stid);

while (($emp = oci_fetch_array($stid, OCI_BOTH)) != false) {
	if ($_POST['id'] == $emp['IDENTIFIANT']){
		if ($_POST['password'] == $emp['MDP']){
			header('Location: accueilBoite.php');
		}
		
	}

}

echo "Erreur code ou identifiant ";
echo '<a href="login.php" >'.'Reessayer'.'</a>';
echo "</table>";

?>