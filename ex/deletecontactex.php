<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	if(!isset($_GET["id"])){
         redirect("/index.php");   
    }
    $x=$_GET["id"];
	sqlDelete('contact' , [[
							  "key" => "id" ,
							  "operation" => "=" ,
							  "value" =>$x , 
							  ]
							]);
	redirect("/adminPanel.php");

?>