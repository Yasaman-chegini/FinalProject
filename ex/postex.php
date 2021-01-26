<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	$roles = [
					"title" => "myrequire|minChar:3|maxChar:255" ,
					"context" => "myrequire|minChar:5" 
				];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/newPost.php");
	}
	sqlInsert('product' , [		
					"user_id" => $user->id,
					"title" => read_post("title"),
					"type" => read_post("type"),
					"text" => read_post("context"),
					"img1" => read_post("pic1"),
					"img2" => read_post("pic2"),
					"img3" => read_post("pic3")
							]);	
	redirect("/adminPanel.php");

?>