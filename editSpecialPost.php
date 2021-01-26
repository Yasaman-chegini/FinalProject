<?php    
  $mustBeLogin = true;
  $access= array(0);
  include_once("protect.php");
  if(!isset($_GET["id"])){
        redirect("/post.php");
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
         redirect("/post.php");
    }
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminPanel.css" />
    <title>AdminPanell</title>
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h2 class="logo">پنل ادمین</h2>
          <ul style="font-family: 'B Yas'; font-size: x-large">
                <li><a  href="/adminPanel.php">خانه</a></li>
                <li>
                    <a href="/adminPanel.php">ایجاد پست جدید</a>
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
        <p>ویرایش پست ویژه</p>
      </div>
      <form method="post" action="/ex/editpostex2.php?id=<?=$exist[0]->id?>">
        <div class="group">
          <label for="title">عنوان :</label>
          <input type="text" name="title" id="title"  value="<?=$exist[0]->title?>"/>
        </div>
        <div class="group">
          <label for="pic1">آدرس تصویر 1 :</label>
          <input type="text" name="pic1" id="pic1"  value="<?=$exist[0]->img1?>"/>
        </div>
        <div class="group">
            <label for="pic2">آدرس تصویر 2 :</label>
            <input type="text" name="pic2" id="pic2"  value="<?=$exist[0]->img2?>"/>
          </div>
          <div class="group">
            <label for="pic3">آدرس تصویر 3 :</label>
            <input type="text" name="pic3" id="pic3"  value="<?=$exist[0]->img3?>"/>
          </div>
        <div class="group">
          <label for="context">متن :</label>
          <textarea name="context" id="context"><?=$exist[0]->text?></textarea>
        </div>
        <input type="submit" name="send_p_btn" value="ارسال اطلاعات" />
      </form>
      <a href="uploadPic.html" class="link">آپلود </a>
    </section>
  </body>
</html>
