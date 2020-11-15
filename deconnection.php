<?php

$conn = @oci_connect('AUBERT2B20', 'AUBERT2B2001', '144.21.67.201/1521/pdbest21.631174089.oraclecloud.internal');

if (!$conn) {
   die("Database Connection Error");
}

$stid = oci_parse($conn, 'SELECT * from CLIENT');
oci_execute($stid);
echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th></tr>";
while (($emp = oci_fetch_array($stid, OCI_BOTH)) != false) {
	echo "<tr>";	
	echo "<td>".$emp['FIRST_NAME']."</td>";
	echo "<td>".$emp['LAST_NAME']."</td>";
	echo "</tr>";
	}
echo "</table>";

?>
