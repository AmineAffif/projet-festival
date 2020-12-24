<?php
require "pdo.php";
$f = file("includes/dep.txt");
$db -> query("TRUNCATE TABLE departement");
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db -> prepare("INSERT INTO departement VALUES (:id, :departement)");
foreach ($f as $ligne){
	$ligne = trim($ligne);
	list($id,$departement) = explode(";", $ligne);
	$stmt->execute(array(':id'=> $id,':departement'=> $departement));
}
?>
