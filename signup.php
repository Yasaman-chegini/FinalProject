<?php    
  $mustBeLogin = false;
  include_once("protect.php");
    if ($user !== null) 
        redirect('/adminPanel.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ثبت نام</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="css/mystyle.css" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="css/mymobilestyle.css"
    />
  </head>
  <body>
    <!-- header -->
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
    <!-- header -->
    <div
      class="inside"
      id="q-form"
      style="font-size: x-large; padding: 20px"
      dir="rtl"
    >
      <form method="post" action="/ex/signupex.php">
        <div class="group">
          <label for="fname" style="float: right">نام :</label>
          <input type="text" name="fname" id="fname" placeholder="نام" />
        </div>
        <div class="group">
          <label for="lname" style="float: right">نام خانوادگی :</label>
          <input
            type="text"
            name="lname"
            id="lname"
            placeholder="نام خانوادگی"
          />
        </div>
        <div class="group">
          <label for="username" style="float: right">نام کاربری:</label>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="نام کاربری:"
          />
        </div>
        <div class="group">
          <label for="code" style="float: right">کد ملی :</label>
          <input
            type="number"
            name="code"
            id="code"
            placeholder="11111111111"
          />
        </div>
        <div class="group">
          <label for="pass" style="float: right">رمز عبور :</label>
          <input
            type="text"
            name="pass"
            id="pass"
            placeholder="رمز خود را وارد کنید"
          />
        </div>
        <div class="group">
          <label for="num" style="float: right">شماره تماس :</label>
          <input type="number" name="num" id="num" placeholder="1313131313" />
        </div>
        <div class="group">
          <label for="email" style="float: right">ایمیل :</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="example@gmail.com"
          />
        </div>
        <div class="group">
          <label for="address" style="float: right">آدرس :</label>
          <textarea name="address" id="address"></textarea>
        </div>
        <input type="submit" class="button" name="idea_b" value="ثبت نام" />
      </form>
    </div>
    <!-- footer -->
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
    <!-- end footer -->
  </body>
</html>
