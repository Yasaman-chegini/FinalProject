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
                            "condition" => "AND" ,
                        ],
                        [
                            "key" => "status" ,
                            "operation" => "=" ,
                            "value" =>0,
                        ]]);
    $exist = $exist['result'];
    if (empty($exist)) {
         redirect("/index.php");
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>اطلاعات بیشتر</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap-grid.min.css.map" type="text/css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap-reboot.css" type="text/css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap-reboot.min.css" type="text/css">
    <script src="bootstrap-4/js/jquery.min.js"></script>
    <script src="bootstrap-4/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/mystyle.css" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="css/mymobilestyle.css"
    />
  </head>
  <body style="text-align: right;">
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
                    <li><a href="index.php" style="font-weight: normal;">خانه</a></li>
                    <li><a href="aboutus.php" style="font-weight: normal;">درباره ما</a></li>
                    <li>
                      <a href="contact.php" style="font-weight: normal;"> تماس با ما</a>
                    </li>
                    <li ><a href="posts.php" style="font-weight: normal;">پست ها</a></li>
                    <li><a href="login.php" style="font-weight: normal;">ورود/خروج</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="index.php"
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
    <div class="readMore">
      <div class="readMore_pic">
        <div id="slider" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1"></li>
              <li data-target="#slider" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="slider-img" src="<?=$exist[0]->img1?>" alt="pic1" style="width: 100%;height: 500px;">
              </div>
              <div class="carousel-item">
                  <img class="slider-img" src="<?=$exist[0]->img2?>" alt="pic2" style="width: 100%;height: 500px;">
              </div>
              <div class="carousel-item">
                  <img class="slider-img" src="<?=$exist[0]->img3?>" alt="pic3" style="width: 100%;height: 500px;">
              </div>
          </div>
      </div>
      </div>
      <div class="readMore__txt">
        <a ><?=$exist[0]->title?></a>
        <p style="direction: rtl;"><?=$exist[0]->text?></p>
      </div>
      <div class="post_f">
        <a href="ParticipateIntoBuy.php?id=<?=$exist[0]->id?>">شرکت در مزایده</a>
      </div>
    </div>
    <div
      class="readIdea"
      id="q-form"
      style="font-size: x-large; padding: 20px"
      dir="rtl"
    >
      <div>
        <form method="post" action="/ex/commentex.php?id=<?=$exist[0]->id?>">
          <div class="group">
            <label for="idea">&#1606;&#1592;&#1585;&#1575;&#1578; &#1582;&#1608;&#1583; &#1585;&#1575; &#1576;&#1575; &#1605;&#1575; &#1576;&#1607; &#1575;&#1588;&#1578;&#1585;&#1575;&#1705; &#1576;&#1711;&#1584;&#1575;&#1585;&#1740;&#1583; :</label>
            <textarea name="idea" id="idea"></textarea>
          </div>
          <input type="submit" class="button" name="idea_b" value="ارسال نظر" />
        </form>
        <?php 
            $temp = sqlSelect("comment",[],[],[],[],[
                        [
                            "key" => "product_id" ,
                            "operation" => "=" ,
                            "value" => $x ,
                        ]]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  
        ?>
        <hr />
        <p><?=$thisOBJ->text?></p>
        <?php endforeach ?>
        <br />
      </div>
    </div>
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
