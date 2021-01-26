<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	if(!isset($_GET["id"])){
         redirect("/index.php");   
    }
    $x=$_GET["id"];
	$roles = [
					"idea" => "myrequire|minChar:3|maxChar:3000"
				];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/moreInfo.php?id=$x");
	}
	sqlInsert('comment' , [		
					"user_id" => $user->id,
					"product_id" =>$x,
					"text" => read_post("idea")
							]);
	redirect("/moreInfo.php?id=$x");

?>