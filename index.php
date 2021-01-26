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
<title>مزایده</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="css/style.css">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/index.js" defer></script>
    <link rel="manifest" href="/manifest.webmanifest">


</head>
<body class="main-layout">

<div class="loader_bg">
  <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>

<header> 

  <div class="container">
    <div class="row"  >
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" >
        <div class="menu-area">
          <div class="limit-box">
            <nav class="main-menu">
              <ul class="menu-area-main" dir="rtl">

                <li  class="active"> <a href="index.php">خانه</a> </li>
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
            <div class="logo" > <a href="index.php"><img src="images/logo2.png" alt="#" style="height:100px;"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="slider_section">
  <div class="container" >
    <div class="row">
      <div class="col-md-4" style="padding-top: 65px">

        <div>
          <img  src="images/monaghese.jpg" alt="mainPic" style="height:430px">
          </div>
      </div>
      <div class="col-md-8">
        <div class="full-slider_cont" dir="rtl" >
          <h1 style="text-align: center">مزايده<br>
            <span style="color: #cc9900">آثار هنری و اجناس قیمتی</span></h1>

            <p >طبق تعریف، مزایده به معنای در معرض فروش گذاشتن چیزی است، به ‌نحوی که هر خریداری که قیمت بیشتری را پیشنهاد کرد، کالا به وی فروخته شود.
            </p>
            <p>در هر مزایده باید سه عنصر مزایده‌ گذار، کالا و پیشنهاد دهندگان وجود داشته باشد و مزایده زمانی شکل می ‌گیرد که تقاضا برای کالا یا کالاها بیشتر از مقدار موجود است و پیشنهاد دهندگان برای بدست آوردن کالا با یکدیگر رقابت می ‌کنند.</p>
            <p>قبل از مزایده، کالا از طریق کارشناس رسمی منتخب دادگستری، ارزیابی شده و بهایی که وی برای کالا تعیین می کند، به عنوان بهای پایه فروش انتخاب می شود و با انجام مزایده، هر خریداری که بیشترین قیمت را پیشنهاد دهد، کالا به وی پیشنهاد می شود.</p>
            <p>این سایت در جهت فراهم آوردن تسهیل روند مزایده توسعه یافته است و کاربران می توانند به راحتی و با اطمینان در مزایده شرکت کنند. </p>


        </div>
      </div>
    </div>
  </div>
</section>
<div class="Currency">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage" dir="rtl">
          <h2>پست های <strong style="color: #cc9900">ويژه</strong></h2>
          <span><img src="images/boder.png" alt="img"/> </span> </div>
      </div>
    </div>
    <div class="row">
      <?php 
        $temp = sqlSelect("product" , [] , ["id" => "DESC"] , [0, 3],[], [[
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
        foreach ($temp as $key => $thisOBJ):?>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="<?=$thisOBJ->img1?>" alt="img"/ style="max-height: 350px;"></figure>
          <div class="Bitcoin">
            <h3><?=$thisOBJ->title?></h3>
            <p style="direction: rtl;"><?=substr($thisOBJ->text,0,150)?></p>
          </div>
          <a class="read-more" href="/moreInfo.php?id=<?=$thisOBJ->id?>">جزئیات بیشتر</a> </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>


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

<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/jquery-3.0.0.min.js"></script> 
<script src="js/plugin.js"></script> 

<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>	