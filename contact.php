<?php    
  $mustBeLogin = false;
  include_once("protect.php");
?>
<!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>تماس با ما</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- header -->

<div class="loader_bg">
  <div class="loader" ><img src="images/loading.gif" alt="#" /></div>
</div>
<header> 

  <div class="container">
    <div class="row"  >
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" >
        <div class="menu-area">
          <div class="limit-box">
            <nav class="main-menu">
              <ul class="menu-area-main" dir="rtl">

              
                <li > <a href="index.php">خانه</a> </li>
                <li  > <a href="aboutus.php" >درباره ما</a> </li>
                <li class="active"> <a href="contact.php"> تماس با ما</a> </li>
                <li> <a href="posts.php">پست ها</a> </li>
                <li> <a href="login.php">ورود/خروج</a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section"  >
        <div class="full">
          <div class="center-desk">
            <div class="logo" > <a href="index.html"><img src="images/logo2.png" alt="#" style="height:100px;"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>






<div class="Request">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="titlepage3">
          <h2 style="text-align: right;">درخواست تماس</h2>
        </div>
      </div>
    </div>
    <div class="row" >
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" >
        <form action="/ex/contactex.php" method="POST">
          <input class="form-control" placeholder="نام و نام خانوادگی" type="text" name="name" style="text-align: right;">
          <input class="form-control" placeholder="شماره تماس" type="number" name="phone" style="text-align: right;">
          <input class="form-control" placeholder="ایمیل" type="Email" name="email" style="text-align: right;" >
          <textarea class="textarea" style="text-align: right;" placeholder="پیام" name="text"></textarea>
          <button class="send-btn"type="submit"  >ارسال</button>
        </form>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <img  src="images/question.jpeg" alt="pic3" style="width: 100%;height: 450px;">
      </div>
            </div>
          
        </div>
      </div>
      <div style="padding-left: 34%;padding-bottom: 2%;">
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
          <img  src="images/namadE.png" alt="namad" style="width: 100px">
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
<!-- end footer --> 
<!-- Javascript files--> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/jquery-3.0.0.min.js"></script> 
<script src="js/plugin.js"></script> 

<!-- sidebar --> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>