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

$num = $_POST['numeroEmploye'];

$stid = oci_parse($conn, 'DELETE FROM EMPLOYE WHERE NUMEROEMPLOYE = :num ');

oci_bind_by_name($stid, ':num', $num);

if ( !   oci_execute($stid)){
      $err = oci_error($stid);
      trigger_error('Insertion failed: '. $err['message'], E_USER_ERROR);

    };

header('Location: equipe.php');
exit();

?>