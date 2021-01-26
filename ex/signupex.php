<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	if ($user !== null) 
		redirect('/index.php');
	$roles = [
					"fname" => "myrequire|minChar:3|maxChar:30" ,
					"lname" => "myrequire|minChar:3|maxChar:30" ,
					"username" => "myrequire|minChar:3|maxChar:30" ,
					"code" => "myrequire|minChar:1|maxChar:15" ,
					"pass" => "myrequire|minChar:3|maxChar:50" ,
					"num" => "myrequire|minChar:1|maxChar:20" ,
					"email" => "myrequire|minChar:5|maxChar:200" ,
					"address" => "myrequire|minChar:5" 
				];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/signup.php");
	}
	$temp = sqlSelect('users' , [] , ["id" => "DESC"] , [0,1] , [] , [
																		[
																			"key" => "username" ,
																			"operation" => "=" ,
																			"value" => read_post('username') ,
																			"condition" => "OR" ,
																		] ,
																		[
																			"key" => "email" ,
																			"operation" => "=" ,
																			"value" => read_post('email')
																		] 

																			]);
	$temp = $temp['result'];
	if (count($temp) != 0)
	{
		setResult(true, ["username or email already exists"] );
		redirect("/signup.php");
	} 
	$token = generateToken();
	sqlInsert('users' , [		
					"name" => read_post("fname"),
					"familyname" => read_post("lname"),
					"username" => read_post("username"),
					"code" => read_post("code"),
					"password" => userPassword(read_post('pass')),
					"number" => read_post("num"),
					"email" => read_post("email"),
					"address" => read_post("address"), 
					"type" => 2,
					"token" => $token ,
							]);
	set_session("token" , $token);	
	redirect("/index.php");

?>