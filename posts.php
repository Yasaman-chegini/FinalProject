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
    <title>&#1662;&#1587;&#1578; &#1607;&#1575;</title>
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
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
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
                <li> <a href="login.php">&#1608;&#1585;&#1608;&#1583;/&#1582;&#1585;&#1608;&#1580;</a> </li>
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
    <div class="container " style="text-align:center;padding: 30px" dir="rtl">
          <form method="post" action="/ex/searchex.php" >

            <label for="gsearch" style="font-size: large">&#1605;&#1581;&#1589;&#1608;&#1604; &#1605;&#1608;&#1585;&#1583; &#1606;&#1592;&#1585; &#1582;&#1608;&#1583; &#1585;&#1575; &#1576;&#1610;&#1575;&#1576;&#1610;&#1583; :  </label>
            <input type="search" id="gsearch" name="gsearch"  placeholder=" ... " style="border-radius: 3px;width: 300px;height: 30px">
            <button type="submit" class="button buttonsearch" >&#1580;&#1587;&#1578;&#1580;&#1608;</button>
          </form>
        </div>
        <?php if(!isset($_SESSION["searchres"])): ?>
              <?php 
            $temp = sqlSelect("product",[],["id" => "DESC"],[],[],[
                                    [
                                      "key" => "status" ,
                                      "operation" => "=" ,
                                      "value" => 0 
                                    ]]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  ?>
    <section >     
      <div class="content_P">       
        <div class="t_pc">
          <img src="<?=$thisOBJ->img1?>" alt="pic" />
        </div>
        <div class="tv_title">
          <p><?=$thisOBJ->title?></p>
        </div>
        <div class="tv_content">
          <p  style=" text-align: right; direction: rtl;">
            <?= substr($thisOBJ->text,0,950)?>
          </p>
        </div>
        <div class="post_f">
          <a href="/moreInfo.php?id=<?=$thisOBJ->id?>">&#1575;&#1583;&#1575;&#1605;&#1607; ...</a>
        </div>
        
      </div>
      
    </section>
    <?php endforeach ?>
         <?php else: ?>
          <?php foreach ($_SESSION['searchres'] as $key => $thisOBJ):  ?>
    <section >     
      <div class="content_P">       
        <div class="t_pc">
          <img src="<?=$thisOBJ->img1?>" alt="pic" />
        </div>
        <div class="tv_title">
          <p><?=$thisOBJ->title?></p>
        </div>
        <div class="tv_content">
          <p  style=" text-align: right; direction: rtl;">
            <?= substr($thisOBJ->text,0,950)?>
          </p>
        </div>
        <div class="post_f">
          <a href="/moreInfo.php?id=<?=$thisOBJ->id?>">&#1575;&#1583;&#1575;&#1605;&#1607; ...</a>
        </div>
        
      </div>
      
    </section>
    <?php endforeach ?>
            <?php unset($_SESSION['searchres']); ?>
        <?php endif; ?>

 
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
