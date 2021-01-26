<?php 




function generateToken()
{
	$token = md5(rand(1000 , 9999).md5(rand(100 , 999) . time() . rand(100 , 999)).rand(1000 , 9999));
	return $token;
}

function userPassword($password)
{
	$password = md5("abcd".$password."1234");
	return $password;
}

function redirect($url)
{
	header("Location: {$url}");
	exit();
}

function setResult($error = false , $errors = [] , $messages = [])
{
	if ($error === true) 
		set_session("oldData" , $_POST);
	$result_content = [	
							"error" => $error ,
							"errors" => $errors,
							"messages" => $messages ,
							];

	set_session('result' , $result_content);				
}


function showMsg()
{
	if (isset($_SESSION['result']['errors'])) 
	{
		echo "<br>";
		foreach ($_SESSION['result']['errors'] as $error) 
		{
			echo "<div class='alert alert-danger'>{$error}</div>";
		}
	}


	if (isset($_SESSION['result']['messages'])) 
	{ 
		echo "<br>";
		foreach ($_SESSION['result']['messages'] as $msg) 
		{
			echo "<div class='alert alert-success'>{$msg}</div>";
		} 
	}

	delete_session('result');
}

function set_session($key , $value)
{
	$_SESSION[$key] = $value;
}

function delete_session($key)
{
	if (read_session($key)) 
		unset($_SESSION[$key]);
}

function read_session($key)
{
	if (isset($_SESSION[$key])) 
		return $_SESSION[$key];
	else
		return NULL;
}

function set_cookie($key , $value , $time = NULL)
{
	if ($time == NULL) 
	{
		$time = time() + (86400 * 30);
	}
	setcookie($key ,  $value , $time , "/");
}

function delete_cookie($key)
{
	if (read_cookie($key))
		setcookie($key, "", time() - 3600 , "/");
}

function read_cookie($key)
{
	if (isset($_COOKIE[$key])) 
		return $_COOKIE[$key];
	else
		return NULL;
}



function read_post($key)
{
	if (isset($_POST[$key])) 
		return $_POST[$key];
	else
		return NULL;
}
function read_get($key)
{
	if (isset($_GET[$key])) 
		return $_GET[$key];
	else
		return NULL;
}



function oldData($key , $obj = NULL)
{
	if (isset($_SESSION['oldData'][$key])) 
		return $_SESSION['oldData'][$key];
	if ($obj !== NULL && isset($obj->$key)) 
		return $obj->$key;
	return NULL;

}


function get_current_url()
{
	return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}



?>