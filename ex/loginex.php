<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	if ($user !== null) 
		redirect('/index.php');
	$roles = [
					"username" => "myrequire|minChar:3|maxChar:30" ,
					"password" => "myrequire|minChar:3" 
				];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/login.php");
	}
	$temp = sqlSelect('users' , [] , ["id" => "DESC"] , [0,1] , [] , [
																		[
																			"key" => "username" ,
																			"operation" => "=" ,
																			"value" => read_post('username') ,
																			"condition" => "AND" ,
																		] ,
																		[
																			"key" => "password" ,
																			"operation" => "=" ,
																			"value" => userPassword(read_post('password')) ,
																		]

																			]);
	$temp = $temp['result'];
	if (count($temp) == 0)
	{
		setResult(true, ["username or password is wrong"] );
		redirect("/login.php");
	} 
	$user_id = $temp[0]->id; 
	$token = generateToken();
	$username= $temp[0]->type; 	
	sqlUpdate('users' , ['token' => $token] , [
															[
																"key" => "id" ,
																"operation" => "=" ,
																"value" => $user_id , 
															]
														]);

	set_session("token" , $token);
	if ($username==0) {
			redirect("/adminPanel.php");
		}	
	redirect("/index.php");
?>