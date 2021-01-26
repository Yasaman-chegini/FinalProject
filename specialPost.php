<?php    
  $mustBeLogin = true;
  $access= array(0);
  include_once("protect.php");
    
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminPanel.css" />
    <title>&#1575;&#1740;&#1580;&#1575;&#1583; &#1662;&#1587;&#1578; &#1580;&#1583;&#1740;&#1583;</title>
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h2 class="logo">پنل ادمین</h2>
          <ul style="font-family: 'B Yas'; font-size: x-large">
                <li><a  href="/adminPanel.php">خانه</a></li>
                <li>
                    <a class="in_page" href="/adminPanel.php">ایجاد پست جدید</a>
                    <ul>
                        <li><a href="newPost.php">پست عادی</a></li>
                        <li><a href="specialPost.php"> پست ویژه</a></li>
                    </ul>
                </li>
                <li><a href="post.php">مدیریت پست های قبلی</a></li>
                <li><a href="/ex/logoutex.php">خروج</a></li>
            </ul>
        </div>
      </nav>
    </header>
    <section class="new_bx">
      <div class="title">
        <p>ارسال پست ویژه</p>
      </div>
      <form method="post" action="/ex/postex2.php">
        <input type="hidden" name="type" value="2">
        <div class="group">
          <label for="title">عنوان :</label>
          <input type="text" name="title" id="title" />
        </div>
        <div class="group">
          <label for="pic1">آدرس تصویر 1 :</label>
          <input type="text" name="pic1" id="pic1" />
        </div>
        <div class="group">
            <label for="pic2">آدرس تصویر 2 :</label>
            <input type="text" name="pic2" id="pic2" />
          </div>
          <div class="group">
            <label for="pic3">آدرس تصویر 3 :</label>
            <input type="text" name="pic3" id="pic3" />
          </div>
        <div class="group">
          <label for="context">متن :</label>
          <textarea name="context" id="context"></textarea>
        </div>
        <input type="submit" name="send_p_btn" value="ارسال اطلاعات" />
      </form>
      <a href="uploadPic.php" class="link" target="_blank">آپلود </a>
    </section>
  </body>
</html>
