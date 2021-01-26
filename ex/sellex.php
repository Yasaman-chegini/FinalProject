<?php 
	$mustBeLogin = false;
	include_once("../protect.php"); 
	if(!isset($_GET["id"])){
         redirect("/post.php");   
    }
    $x=$_GET["id"];
    $title =sqlSelect("product",[],[],[],[],[[
                                            "key" => "id" ,
                                            "operation" => "=" ,
                                            "value" => $x ,
                                            ]]);
    $title = $title['result'];
    if (empty($title)) {
    	redirect("/post.php");
    }
	sqlUpdate('product' , ["status" => 1
						] , [[
							  "key" => "id" ,
							  "operation" => "=" ,
							  "value" => $x , 
							  ]
							]);
	redirect("/post.php");
?>