<?require "pdo.php";
$db = new PDO("mysql:host=$SRV;dbname=$BASE;port=$PORT;charset=utf8",$USR,$MDP);
$f = file("dep.txt");

$db->query("TRUNCATE TABLE album");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//prépare la requête
$stmt = $db->prepare("INSERT INTO departement VALUES (:id, :departement)");

foreach ($f as $ligne){
	//enlève les caractères invisbiles \r, \n, \t, etc...
	$ligne = trim($ligne);
	//découper la ligne en deux
	list($id,$departement) = explode(";", $ligne);

	//insérer les deux valeurs dans la base
	$stmt->execute(array(':id'=> $id,':departement'=> $departement));

}
?>
