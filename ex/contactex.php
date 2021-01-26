<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	$roles = [
					"name" => "myrequire|minChar:3|maxChar:100",
					"phone" => "myrequire|minChar:3|maxChar:30",
					"email" => "myrequire|minChar:3|maxChar:100",
					"text" => "myrequire"
				];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/contact.php");
	}
	sqlInsert('contact' , [		
					"name" => read_post("name"),
					"phone" =>read_post("phone"),
					"email" =>read_post("email"),
					"text" => read_post("text")
							]);
	redirect("/index.php");

?>