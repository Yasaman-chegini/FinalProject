<?php 
	$mustBeLogin = false;
	include_once("../protect.php"); 
	$roles = [
					"fname" => "myrequire|minChar:3|maxChar:30" ,
					"lname" => "myrequire|minChar:3|maxChar:30" ,
					"code" => "myrequire|minChar:1|maxChar:15" ,
					"num" => "myrequire|minChar:1|maxChar:20" ,
					"email" => "myrequire|minChar:5|maxChar:200" ,
					"address" => "myrequire|minChar:5"  
			 ];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/edit_contact.php");
	}
	$pass=$user->password;
	if (read_post('pass')!=="") {
		$pass= userPassword(read_post('pass'));
	}
	sqlUpdate('users' , ["name" => read_post('fname') ,
						"familyname" => read_post('lname') ,
						"code" => read_post('code') ,
						"number" => read_post('num') ,
						"email" => read_post('email') ,
						"password" => $pass ,
						"address" =>read_post('address')
						] , [[
							  "key" => "id" ,
							  "operation" => "=" ,
							  "value" => $user->id, 
							  ]
							]);
	redirect("/index.php");
?>