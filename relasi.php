<?php
error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "arkademy";
$connection = mysql_connect($host,$username,$password);
if (!$connection){
	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($dbname) or die(mysql_error());
	mysql_query("SET NAMES utf8");
	// membuat pengaturan tabel sebelum di looping
		echo "<center><h3>Menampilkan Record</h3>
		<table width=25% border=1>
			<tr>
				<td><b />id</td>
				<td><b />name</td>
				<td><b />category</td>
			</tr>
			<tr>";
			// koneksi sql dan melakukan join data
			$kiky= mysql_query("SELECT * FROM product_categories INNER JOIN products ON product_categories.id=products.category_id;");
			// start looping
			while ($row = mysql_fetch_array($kiky))
			{
			$id = $row['id'];
			$name = $row['name'];
			$name2 = $row['names'];
			echo "
				<td>".$row[id]."</td>
				<td>".$row[name]."</td>
				<td>".$row[names]."</td>
			</tr>";
			}
			echo "</table>";
?>

