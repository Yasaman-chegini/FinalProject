<?php 
	$mustBeLogin = false;
	include_once("../protect.php");
	if(!isset($_GET["id"])){
         redirect("/index.php");   
    }
    $x=$_GET["id"];
	$roles = [
					"name" => "myrequire|minChar:3|maxChar:30" ,
					"number" => "myrequire|minChar:3|maxChar:30" ,
					"expiration-month-and-year" => "myrequire|minChar:3|maxChar:15" ,
					"cvv" => "myrequire|minChar:1|maxChar:5" ,
					"security-code" => "myrequire|minChar:3|maxChar:10" ,
				];
	$temp = validation($_POST , $roles);
	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/payPort.php?id=$x");
	}
	$temp = sqlSelect('product' , [] , ["id" => "DESC"] , [0,1] , [] , [
																		[
																			"key" => "id" ,
																			"operation" => "=" ,
																			"value" =>$x 
																		] 
																			]);
	$temp = $temp['result'];
	$temp=$temp[0];
	
	sqlInsert('pay' , [		
					"name" => read_post("name"),
					"number" => read_post("number"),
					"cvv" => read_post("cvv"),
					"date" => read_post("expiration-month-and-year"),
					"pass2" => read_post('security-code'),
					"price" => $temp->price,
					"user_id" => $user->id,
					"product_id" => $temp->id, 
					"title" => $temp->title ,
							]);
	sqlDelete('comment' , [[
							  "key" => "product_id" ,
							  "operation" => "=" ,
							  "value" =>$temp->id , 
							  ]
							]);
	sqlDelete('product' , [[
							  "key" => "id" ,
							  "operation" => "=" ,
							  "value" =>$temp->id , 
							  ]
							]);
	redirect("/index.php");

?>