<?php
header('Access-Control-Allow-Origin: *'); 
$servername = "localhost";
$username = "root";
$password = "";
$id=$_GET['id'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=billsfactory", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

/*	$stmt = $conn->prepare("SELECT * FROM factures where id=:id"); 
	$id=$_GET['id'];
	$stmt->execute();*/
	$id=$_GET['id'];
$sql = "SELECT * FROM factures where id=$id";
$result = $conn->query($sql);
class Emp {
      public $id_facture = "";
      public $id_abo = "";	
      public $consomation  = 0;
      public $mois  = "";
      public $prix = 0;      
      public $etat = 0;
      
   }
  $e = new Emp();
 while($row = $result->fetch())
{
	$e->id_facture = $row["id"];
	$e->id_abo = $row["abonnement_id"];
	$e->consomation = $row["consomation"];
	$e->prix = $row["prix"];
	$e->mois = $row["mois"];
	$e->etat = $row["reglement"];	
}

	
 
 
//var_dump($stmt->fetchAll());

	echo json_encode($e);
	//echo json_encode($stmt->fetchAll());
?>
