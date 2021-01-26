<?php    
  $mustBeLogin = false;
  include_once("protect.php");
    if ($user !== null) 
        redirect('/edit_contact.php');
?>
<!DOCTYPE html>
<html>
<head>

    <title>&#1608;&#1585;&#1608;&#1583;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <div class="menu-area">
              <div class="limit-box">
                <nav class="main-menu">
                  <ul class="menu-area-main" dir="rtl">
                    <li > <a href="index.php">خانه</a> </li>
                <li  > <a href="aboutus.php" >درباره ما</a> </li>
                <li> <a href="contact.php"> تماس با ما</a> </li>
                <li> <a href="posts.php">پست ها</a> </li>
                <li class="active"> <a href="login.php">ورود/خروج</a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="index.html"
                    ><img src="images/logo2.png" alt="#" style="height: 100px"
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

<div class="container" style="padding-top: 1px">

    <div class="row justify-content-center container"  dir="rtl">
        <form action="/ex/loginex.php" method="POST" style=" box-sizing: border-box; border: 3px solid #332500;border-radius: 4px;padding: 10px;width: 50%;background-color:#faf55c
">
            <div style="text-align: center;margin: 24px 0 12px 0;">
                <img src="images/avartar.png" alt="Avatar" style="  width: 50%;border-radius: 70%;">
            </div>

            <div class="form-group" style="padding-top: 100px">
                <label  style="float: right"><b >نام کاربری</b></label>
                <input type="text"  class="form-control" placeholder="نام کاربری" name="username" >

                <label style="float: right"><b>رمز ورود</b></label>
                <input type="password"  class="form-control" placeholder="رمز ورود" name="password" >
                    <button type="submit" name="login" class="btn btn-success form-control"style="padding-top: 5px" >ورود</button>
            </div>
            <h5  style="font-size:1vw; text-shadow: 10px 10px 15px ;text-align: center ;color:#cc9900 ;font-family: Charcoal, sans-serif;" dir="rtl"><a href="/signup.php">ثبت نام</a></h5>
        </form>
    </div>
</div>
<br>
  <footer>
      <div class="footer" style="background-color: #eddb42">
        <div class="container">
          <div class="row" dir="rtl" style="text-align: right">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
              <h3 style="font-size: 150%; color: black">
                پروژه درس مهندسی اینترنت <br />
                دانشگاه گیلان <br />
                پاییز 1399
              </h3>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
              <div>
                <span style="font-size: 200%; color: black">امور مشتریان</span>
              </div>
              <ul class="links">
                <li>
                  <a href="contact.php" style="color: #ba1700; font-size: 150%"
                    >تماس با ما</a
                  >
                </li>
                <li>
                  <a href="aboutus.php" style="color: #ba1700; font-size: 150%"
                    >درباره ما</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
              <img src="images/namadE.png" alt="namad" style="width: 100px" />
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
              <div class="options__div">
                <a href="#">
                  <img
                    src="https://www.onlineshop.ir/img/Group474.png"
                    alt=""
                  />
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
