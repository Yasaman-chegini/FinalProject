<?php    
  $mustBeLogin = true;
  $access= array(0,2);
  include_once("protect.php");
  if(!isset($_GET["id"])){
        redirect("/index.php");
    }else{
        $x=$_GET["id"];
    }
    $exist =sqlSelect("product",[],[],[],[],[
                        [
                            "key" => "id" ,
                            "operation" => "=" ,
                            "value" => $x ,
                        ]]);
    $exist = $exist['result'];
    if (empty($exist)) {
         redirect("/index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>

    <title>شرکت در خرید</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>

<body>

<header>

    <div class="container">
        <div class="row"  >
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" >
                <div class="menu-area">
                    <div class="limit-box">
                        <nav class="main-menu">
                            <ul class="menu-area-main" dir="rtl">

                                <li > <a href="index.php">خانه</a> </li>
                <li > <a href="aboutus.php" >درباره ما</a> </li>
                <li> <a href="contact.php"> تماس با ما</a> </li>
                <li> <a href="posts.php">پست ها</a> </li>
                <li> <a href="login.php">ورود/خروج</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section" style="" >
                <div class="full">
                    <div class="center-desk">
                        <div class="logo" > <a href="index.php"><img src="/images/logo2.png" alt="#" style="height:100px;"></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container" >


    <div class="row justify-content-center container"  dir="rtl" style="padding: 50px">
        <form action="/ex/offerex.php?id=<?=$exist[0]->id?>" method="POST" style=" color: #663300; box-sizing: border-box; border: 1px solid #332500;border-radius: 4px;padding: 10px;width: 60%;background-color:#ffff80
">
            <h3 style="text-align: center;font-size:3vw; text-shadow: 10px 10px 15px;padding-top: 5px">شرکت در خرید</h3>
            <div class="form-group" style="float: right"><b >قیمت فعلی:<?=$exist[0]->price?></b></div>
            <div class="form-group" style="padding-top: 50px"> 
                <label  style="float: right"><b >قیمت پیشنهادی</b></label>
                <input type="text" name="price"  class="form-control" placeholder="قیمت پیشنهادی" name="username" >
                <div style="padding-top: 5px">
                    <button type="submit" name="login" class="btn btn-success form-control " style="color: #ffff80" >ثبت قیمت پیشنهادی</button>
                </div>

            </div>
        </form>
    </div>
<!--</div>-->
</div>

<!-- footer -->
<footer>
    <div class="footer" style="background-color:#eddb42">
        <div class="container">
            <div class="row" dir="rtl" style="text-align: right">

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <h3 style=" font-size: 150%;color: black" >پروژه درس مهندسی اینترنت <br> دانشگاه گیلان <br> پاییز 1399</h3>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div ><span style=" font-size: 200%;color: black">امور مشتریان</span></div>
                    <ul class="links">
                        <li> <a href="contact.php" style="color: #ba1700;font-size: 150%;">تماس با ما</a> </li>
            <li> <a href="aboutus.php" style="color: #ba1700;font-size: 150%;">درباره  ما</a> </li>
                    </ul>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12" >
                    <img  src="/images/namadE.png" alt="namad" style="width: 100px">
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="options__div">
                        <a href="#">
                            <img src="https://www.onlineshop.ir/img/Group474.png" alt="">
                            <strong class="mt-3">پشتیبانی 24 ساعته</strong>
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </div>
</footer>
</body>
</html>
