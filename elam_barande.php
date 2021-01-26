<?php    
  $mustBeLogin = true;
  $access= array(0,2);
  include_once("protect.php");
  if(!isset($_GET["id"])){
        redirect("/index.php");
    }else{
        $x=$_GET["id"];
    }
    if ($x==2) {
     $button="&#1583;&#1585; &#1575;&#1606;&#1578;&#1592;&#1575;&#1585; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578;";
     $title="&#1582;&#1585;&#1740;&#1583; &#1607;&#1575;&#1740; &#1602;&#1576;&#1604;&#1740;";
     $link="/elam_barande.php?id=1";
     $exist =sqlSelect("pay",[],[],[],[],[
                        [
                            "key" => "user_id" ,
                            "operation" => "=" ,
                            "value" => $user->id 
                        ]]);
    $exist = $exist['result'];
    if (empty($exist)) {
         redirect("/edit_contact.php");
    }
    $part=array();
    foreach ($exist as $key => $thisOBJ){
      array_push($part,["title"=>$thisOBJ->title,"price"=>$thisOBJ->price]);
    } 

    }else if($x==1){
     $title="&#1583;&#1585; &#1575;&#1606;&#1578;&#1592;&#1575;&#1585; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578;";
     $button="&#1582;&#1585;&#1740;&#1583; &#1607;&#1575;&#1740; &#1602;&#1576;&#1604;&#1740;";
     $link="/elam_barande.php?id=2";
     $exist =sqlSelect("product",[],[],[],[],[
                        [
                            "key" => "fromuser" ,
                            "operation" => "=" ,
                            "value" => $user->id ,
                            "condition" => "AND" ,
                        ],
                        [
                            "key" => "status" ,
                            "operation" => "=" ,
                            "value" =>1,
                        ]]);
    $exist = $exist['result'];
    if (empty($exist)) {
         redirect("/edit_contact.php");
    }
    $part=array();
    foreach ($exist as $key => $thisOBJ){
      array_push($part,["title"=>$thisOBJ->title,"price"=>$thisOBJ->price,"id"=>$thisOBJ->id]);
    } 
    }
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
<title>&#1575;&#1593;&#1604;&#1575;&#1605; &#1576;&#1585;&#1606;&#1583;&#1607;</title>
<!-- bootstrap css -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="elambarande.css">
<!-- body -->
<body>
  <div class="container">
    <div class="row" style="padding-top: 4%;">
       
       <div class="info_style">
            <div >
                     <h2 ><?=$title?></h2 >
             </div>
                <div >
                    <p>
                        <a href=<?=$link?> ><?=$button?></a>
                    </p>
                </div>
          </div>
    </div>
    
  <div class="row" style="padding-bottom: 5%;padding-top: 7%">
    <div class="col-md-2" ></div>
    <div class="col-md-8 " >
        <table>
            <thead>
              <tr>
                
                <th  style="width: 240px;">&#1606;&#1575;&#1605;</th>
                <th  style="width: 120px;">&#1602;&#1740;&#1605;&#1578; &#1740;&#1588;&#1606;&#1607;&#1575;&#1583;&#1740;</th>
                <?php if($x==1):?>
                <th  style="width: 120px;"></th>
               <?php endif?>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($part as $key => $thisOBJ):?>
              <tr>
                <td><?=$thisOBJ["title"]?></td>
                <td><?=$thisOBJ["price"]?></td>
                <?php if($x==1):
                  $objid=$thisOBJ["id"];
                  ?>
                <td ><a href="/payPort.php?id=<?=$objid?>">&#1662;&#1585;&#1583;&#1575;&#1582;&#1578;</a></td>
               <?php endif?>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
    </div>
    <div class="col-md-2" ></div>
  </div>
  </div>
<!-- footer -->
<!-- footer -->
<footer>
  <div class="footer" style="background-color:#eddb42">
    <div class="container">
<div class="row" dir="rtl" style="text-align: right;padding-bottom:8%"> <p style=" font-size: 150%;padding-right:4%">&#1576;&#1585;&#1606;&#1583;&#1607; &#1605;&#1587;&#1575;&#1576;&#1602;&#1607; &#1587;&#1575;&#1593;&#1578; 21 &#1607;&#1585; &#1588;&#1576; &#1575;&#1593;&#1604;&#1575;&#1605; &#1582;&#1608;&#1575;&#1607;&#1583; &#1588;&#1583; &#1608; &#1576;&#1585;&#1606;&#1583;&#1607; &#1576;&#1607; &#1605;&#1583;&#1578; &#1740;&#1705; &#1587;&#1575;&#1593;&#1578; &#1586;&#1605;&#1575;&#1606; &#1583;&#1575;&#1585;&#1583; &#1607;&#1586;&#1740;&#1606;&#1607; &#1585;&#1575; &#1608;&#1575;&#1585;&#1740;&#1586; &#1705;&#1606;&#1583;.&#1583;&#1585; &#1594;&#1740;&#1585; &#1575;&#1740;&#1606; &#1589;&#1608;&#1585;&#1578; &#1705;&#1575;&#1604;&#1575; &#1608;&#1575;&#1711;&#1586;&#1575;&#1585; &#1605;&#1740;&#1711;&#1585;&#1583;&#1583;.</p></div>
      <div class="row" dir="rtl" style="text-align: right">

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
          <h3 style=" font-size: 150%;color: black" >&#1662;&#1585;&#1608;&#1688;&#1607; &#1583;&#1585;&#1587; &#1605;&#1607;&#1606;&#1583;&#1587;&#1740; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578; <br> &#1583;&#1575;&#1606;&#1588;&#1711;&#1575;&#1607; &#1711;&#1740;&#1604;&#1575;&#1606; <br> &#1662;&#1575;&#1740;&#1740;&#1586; 1399</h3>
        </div>


        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
          <div ><span style=" font-size: 200%;color: black">&#1575;&#1605;&#1608;&#1585; &#1605;&#1588;&#1578;&#1585;&#1740;&#1575;&#1606;</span></div>
          <ul class="links">
           <li> <a href="contact.html" style="color: #ba1700;font-size: 150%;">&#1578;&#1605;&#1575;&#1587; &#1576;&#1575; &#1605;&#1575;</a> </li>
            <li> <a href="aboutus.html" style="color: #ba1700;font-size: 150%;">&#1583;&#1585;&#1576;&#1575;&#1585;&#1607;  &#1605;&#1575;</a> </li>
          </ul>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12" >
          <img  src="images/namadE.png" alt="namad" style="width: 100px">
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
          <div class="options__div">
            <a href="#">
              <img src="https://www.onlineshop.ir/img/Group474.png" alt="">
              <strong class="mt-3">&#1662;&#1588;&#1578;&#1740;&#1576;&#1575;&#1606;&#1740; 24 &#1587;&#1575;&#1593;&#1578;&#1607;</strong>
            </a>
          </div>
        </div>



      </div>
    </div>
  </div>
</footer>
</body>
</html>