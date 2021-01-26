<?php    
  $mustBeLogin = true;
  $access= array(0);
  include_once("protect.php");
?>
<!DOCTYPE html>
<html  >
<head>
<!-- basic -->
<meta charset="utf-8">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>&#1605;&#1583;&#1740;&#1585;&#1740;&#1578; &#1662;&#1587;&#1578; &#1607;&#1575;&#1740; &#1602;&#1576;&#1604;&#1740;</title>

<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="post.css" />
</head>
<!-- body -->
<body class="main-layout">
 <header>
    <nav id="navbar">
        <div class="container">
            <h2 class="logo">&#1662;&#1606;&#1604; &#1575;&#1583;&#1605;&#1740;&#1606;</h2>
            <ul style="font-family: 'B Yas'; font-size: x-large">
                <ul style="font-family: 'B Yas'; font-size: x-large">
                <li><a  href="/adminPanel.php">&#1582;&#1575;&#1606;&#1607;</a></li>
                <li>
                    <a href="/adminPanel.php">&#1575;&#1740;&#1580;&#1575;&#1583; &#1662;&#1587;&#1578; &#1580;&#1583;&#1740;&#1583;</a>
                    <ul>
                        <li><a href="newPost.php">&#1662;&#1587;&#1578; &#1593;&#1575;&#1583;&#1740;</a></li>
                        <li><a href="specialPost.php"> &#1662;&#1587;&#1578; &#1608;&#1740;&#1688;&#1607;</a></li>
                    </ul>
                </li>
                <li><a class="in_page" href="post.php">&#1605;&#1583;&#1740;&#1585;&#1740;&#1578; &#1662;&#1587;&#1578; &#1607;&#1575;&#1740; &#1602;&#1576;&#1604;&#1740;</a></li>
                <li><a href="/ex/logoutex.php">&#1582;&#1585;&#1608;&#1580;</a></li>
            </ul>
            </ul>
        </div>
    </nav>
</header>
  <div class="container">

    <div class="row" style="padding-bottom: 3%;">
    <div class="col-md-2" ></div>
    <div class="col-md-8 " >
        <table style=" caption-side: top;">
		<caption >&#1662;&#1587;&#1578; &#1607;&#1575;&#1740; &#1593;&#1575;&#1583;&#1740;</caption >
            <thead>
              <tr>
			  <th>&#1705;&#1583;</th>
			  <th>&#1593;&#1606;&#1608;&#1575;&#1606;</th>
			  <th>&#1602;&#1740;&#1605;&#1578;</th>
              <th>&#1593;&#1605;&#1604;&#1740;&#1575;&#1578;</th> 
              </tr>
            </thead>
             <?php 
            $temp = sqlSelect("product",[],[],[],[],[
                       [
                                      "key" => "user_id" ,
                                      "operation" => "=" ,
                                      "value" => $user->id ,
                                      "condition" => "AND" ,
                                    ] ,
                                    [
                                      "key" => "status" ,
                                      "operation" => "=" ,
                                      "value" => 0 ,
                                      "condition" => "AND" ,
                                    ] ,
                                    [
                                      "key" => "type" ,
                                      "operation" => "=" ,
                                      "value" => 1
                                    ]]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  ?>
            <tbody>
              <tr>
                <td><?=$thisOBJ->id?></td>
                <td><?=$thisOBJ->title?></td>
        <td><?=$thisOBJ->price?></td>
        <td>
        <a href="/ex/sellex.php?id=<?=$thisOBJ->id?>" style="color: red;padding-left:11%">&#1601;&#1585;&#1608;&#1588;</a>
        <a href="editPost.php?id=<?=$thisOBJ->id?>" style="color: red;padding-left:11%">&#1608;&#1740;&#1585;&#1575;&#1740;&#1588;</a>
        <a href="/ex/deletepost.php?id=<?=$thisOBJ->id?>" style="color: red">&#1581;&#1584;&#1601;</a>
        </td>
              </tr>
            </tbody>
          <?php endforeach ?>
          </table>
    </div>
    <div class="col-md-2" ></div>
  </div>
  <div class="row" style="padding-bottom: 3%;">
    <div class="col-md-2" ></div>
    <div class="col-md-8 " >
        <table style=" caption-side: top;">
		<caption >&#1662;&#1587;&#1578; &#1607;&#1575;&#1740; &#1608;&#1740;&#1688;&#1607;</caption >
            <thead>
              <tr>
	          <th>&#1705;&#1583;</th>
			  <th>&#1593;&#1606;&#1608;&#1575;&#1606;</th>
			  <th>&#1602;&#1740;&#1605;&#1578;</th>
              <th>&#1593;&#1605;&#1604;&#1740;&#1575;&#1578;</th>	
              </tr>
            </thead>
             <?php 
            $temp = sqlSelect("product",[],[],[],[],[
                       [
                                      "key" => "user_id" ,
                                      "operation" => "=" ,
                                      "value" => $user->id ,
                                      "condition" => "AND" ,
                                    ] ,
                                     [
                                      "key" => "status" ,
                                      "operation" => "=" ,
                                      "value" => 0 ,
                                      "condition" => "AND" ,
                                    ] ,
                                    [
                                      "key" => "type" ,
                                      "operation" => "=" ,
                                      "value" => 2
                                    ]]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  ?>
            <tbody>
              <tr>
                <td><?=$thisOBJ->id?></td>
                <td><?=$thisOBJ->title?></td>
				<td><?=$thisOBJ->price?></td>
				<td>
				<a href="/ex/sellex.php?id=<?=$thisOBJ->id?>" style="color: red;padding-left:11%">&#1601;&#1585;&#1608;&#1588;</a>
				<a href="editSpecialPost.php?id=<?=$thisOBJ->id?>" style="color: red;padding-left:11%">&#1608;&#1740;&#1585;&#1575;&#1740;&#1588;</a>
        <a href="/ex/deletepost.php?id=<?=$thisOBJ->id?>" style="color: red">&#1581;&#1584;&#1601;</a>
				</td>
              </tr>
            </tbody>
            <?php endforeach ?>
          </table>
    </div>
    <div class="col-md-2" ></div>
  </div>
  </div>
</body>
</html>