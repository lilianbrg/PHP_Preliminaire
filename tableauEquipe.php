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

$stid = oci_parse($conn, 'SELECT * from EMPLOYE');
oci_execute($stid);
echo '<table class="table">';
echo "<thead>";
echo "<tr>";
			
echo "<th>"."Nom"."</th>";
echo "<th>"."Prénom"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."Numero"."</th>";
echo "<th>"."</th>";
echo "<th>"."</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while (($emp = oci_fetch_array($stid, OCI_BOTH)) != false) {
	echo "<tr>";	
	echo "<td>".$emp['NOMEMPLOYE']."</td>";
	echo "<td>".$emp['PRENOMEMPLOYE']."</td>";
	echo "<td>".$emp['EMAILEMPLOYE']."</td>";
	echo "<td>".$emp['NUMEROEMPLOYE']."</td>";
	
	echo '<td>'.'<button id="orange" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit" onclick=window.location.href="formModifEquipe.php">'.'Modifier'.'</button>'.'</td>';
	echo '<td>'.'<button id="rouge" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit" onclick=window.location.href="formSupprEquipe.php">'.'Supprimer'.'</button>'.'</td>';
	echo "</tr>";
	}
echo "</tbody>"	;
echo "</table>";

?>