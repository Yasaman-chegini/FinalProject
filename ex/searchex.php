<?php 
$mustBeLogin = false;
  include_once("../protect.php");


  $query = "SELECT * FROM product WHERE title LIKE '%".read_post('gsearch')."%' AND status=0";
	$stmt = $conn->prepare($query);	
	$stmt->execute();
	$searchres= $stmt->fetchAll(PDO::FETCH_OBJ);
	session_start();
	$_SESSION['searchres'] = $searchres;
	redirect("/posts.php");

 ?>