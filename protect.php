<?php 

include_once(__DIR__ . "/pre.php");
$user = NULL;
if (isset($mustBeLogin) && $mustBeLogin == true) 
{
	if (read_session('token') === NULL && read_cookie('token') === NULL) 
		redirect("/login.php");

	$token;
	if (read_session('token') !== NULL)
		$token = read_session('token');
	else
		$token = read_cookie('token');

	$temp = sqlSelect('users' , [] , ["id" => "DESC"] , [0,1] , [] , [
																		[
																			"key" => "token" ,
																			"operation" => "=" ,
																			"value" => $token ,
																		]
																			]);
	$temp = $temp['result'];

	if (count($temp) == 0)
	{

		delete_cookie("token");
		delete_session("token");
		redirect("/login.php");
	}
	$user = $temp[0];
	if (!in_array($user->type , $access,false)){
		redirect("/index.php");
	}
}
else if( read_session('token') !== NULL || read_cookie('token') !== NULL)
{
	$token;
	if (read_session('token') !== NULL)
		$token = read_session('token');
	else
		$token = read_cookie('token');

	$temp = sqlSelect('users' , [] , ["id" => "DESC"] , [0,1] , [] , [
																		[
																			"key" => "token" ,
																			"operation" => "=" ,
																			"value" => $token ,
																		]
																			]);
	$temp = $temp['result'];

	if (count($temp) == 0)
	{

		delete_cookie("token");
		delete_session("token"); 
	}
	else
	{
		$user = $temp[0];
	}

}



?>