<?php 


	require_once __DIR__ ."/../protect.php";

	if ($user === null) 
		redirect('/index.php');
	else
	{
		delete_session('token');
		delete_cookie('token');
		redirect('/index.php');
	}



?>