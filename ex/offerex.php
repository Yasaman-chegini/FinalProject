<?php 
	$mustBeLogin = false;
	include_once("../protect.php"); 
	if(!isset($_GET["id"])){
         redirect("/posts.php");   
    }
    $x=$_GET["id"];
    $title =sqlSelect("product",[],[],[],[],[[
                                            "key" => "id" ,
                                            "operation" => "=" ,
                                            "value" => $x ,
                                            ]]);
    $title = $title['result'];
    if (empty($title)) {
    	redirect("/posts.php");
    }
	$roles = [
				"price" => "myrequire|minChar:3|maxChar:255" 
			 ];
	$temp = validation($_POST , $roles);

	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/ParticipateIntoBuy.php?id=$title[0]->id");
	}
	if($title[0]->price>=read_post("price")){
		setResult(true, $temp['errors'] );
		redirect("/ParticipateIntoBuy.php?id=$title[0]->id");
	}
	sqlUpdate('product' , ["price" => read_post("price"),
					"fromuser" =>$user->id
				] , [[
							  "key" => "id" ,
							  "operation" => "=" ,
							  "value" => $x , 
							  ]
							]);
	redirect("/posts.php");
?>