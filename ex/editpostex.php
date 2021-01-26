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
	$roles = [
				"title" => "myrequire|minChar:3|maxChar:255" ,
				"context" => "myrequire|minChar:5"
			 ];
	$temp = validation($_POST , $roles);

	if ($temp['error'] === true){
		setResult(true, $temp['errors'] );
		redirect("/editPost.php?id=$x");
	}
	sqlUpdate('product' , ["title" => read_post("title"),
					"text" => read_post("context"),
					"img1" => read_post("pic1"),
					"img2" => read_post("pic2"),
					"img3" => read_post("pic3")
						] , [[
							  "key" => "id" ,
							  "operation" => "=" ,
							  "value" => $x , 
							  ]
							]);
	redirect("/post.php");
?>