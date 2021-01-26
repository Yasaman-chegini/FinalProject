<?php    
  $mustBeLogin = true;
  $access= array(0,2);
  include_once("protect.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>&#1608;&#1740;&#1585;&#1575;&#1740;&#1588; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578;</title>
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
                    <li > <a href="index.php">&#1582;&#1575;&#1606;&#1607;</a> </li>
                <li class="active" > <a href="aboutus.php" >&#1583;&#1585;&#1576;&#1575;&#1585;&#1607; &#1605;&#1575;</a> </li>
                <li> <a href="contact.php"> &#1578;&#1605;&#1575;&#1587; &#1576;&#1575; &#1605;&#1575;</a> </li>
                <li> <a href="posts.php">&#1662;&#1587;&#1578; &#1607;&#1575;</a> </li>
                <li> <a href="/ex/logoutex.php">&#1582;&#1585;&#1608;&#1580;</a> </li>
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
      <form method="post" action="/ex/edit_contactex.php">
        <div class="group">
          <label for="fname" style="float: right">&#1606;&#1575;&#1605; :</label>
          <input type="text" name="fname" id="fname" value="<?=$user->name?>" />
        </div>
        <div class="group">
          <label for="lname" style="float: right">&#1606;&#1575;&#1605; &#1582;&#1575;&#1606;&#1608;&#1575;&#1583;&#1711;&#1740; :</label>
          <input type="text" name="lname" id="lname" value="<?=$user->familyname?>"/>
        </div>
        <div class="group">
          <label for="code" style="float: right">&#1705;&#1583; &#1605;&#1604;&#1740; :</label>
          <input type="number" name="code" id="code" value="<?=$user->code?>"/>
        </div>
        <div class="group">
          <label for="pass" style="float: right">&#1585;&#1605;&#1586; &#1593;&#1576;&#1608;&#1585; :</label>
          <input type="text" name="pass" id="pass" />
        </div>
        <div class="group">
          <label for="num" style="float: right">&#1588;&#1605;&#1575;&#1585;&#1607; &#1578;&#1605;&#1575;&#1587; :</label>
          <input type="number" name="num" id="num" value="<?=$user->number?>"/>
        </div>
        <div class="group">
          <label for="email" style="float: right">&#1575;&#1740;&#1605;&#1740;&#1604; :</label>
          <input type="email" name="email" id="email" value="<?=$user->email?>"/>
        </div>
        <div class="group">
          <label for="address" style="float: right">&#1570;&#1583;&#1585;&#1587; :</label>
          <textarea name="address" id="address" ><?=$user->address?></textarea>
        </div>
        <input
          type="submit"
          class="button"
          name="idea_b"
          value="&#1575;&#1593;&#1605;&#1575;&#1604; &#1608;&#1740;&#1585;&#1575;&#1740;&#1588;"
        />
      </form>
      <br>
      <form method="post" action="elam_barande.php?id=1">
        <input
          type="submit"
          class="button"
          name="idea_b"
          value="&#1582;&#1585;&#1740;&#1583; &#1607;&#1575;"
        />
      </form>
    </div>
    <!-- footer -->
    <footer>
      <div class="footer" style="background-color: #eddb42">
        <div class="container">
          <div class="row" dir="rtl" style="text-align: right">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
              <h3 style="font-size: 150%; color: black">
                &#1662;&#1585;&#1608;&#1688;&#1607; &#1583;&#1585;&#1587; &#1605;&#1607;&#1606;&#1583;&#1587;&#1740; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578; <br />
                &#1583;&#1575;&#1606;&#1588;&#1711;&#1575;&#1607; &#1711;&#1740;&#1604;&#1575;&#1606; <br />
                &#1662;&#1575;&#1740;&#1740;&#1586; 1399
              </h3>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
              <div>
                <span style="font-size: 200%; color: black">&#1575;&#1605;&#1608;&#1585; &#1605;&#1588;&#1578;&#1585;&#1740;&#1575;&#1606;</span>
              </div>
              <ul class="links">
                <li>
                  <a href="contact.php" style="color: #ba1700; font-size: 150%"
                    >&#1578;&#1605;&#1575;&#1587; &#1576;&#1575; &#1605;&#1575;</a
                  >
                </li>
                <li>
                  <a href="aboutus.php" style="color: #ba1700; font-size: 150%"
                    >&#1583;&#1585;&#1576;&#1575;&#1585;&#1607; &#1605;&#1575;</a
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
                  <strong class="mt-3">&#1662;&#1588;&#1578;&#1740;&#1576;&#1575;&#1606;&#1740; 24 &#1587;&#1575;&#1593;&#1578;&#1607;</strong>
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
