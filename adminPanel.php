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
    <link rel="stylesheet" href="adminPanel.css" />
    <title>AdminPanel</title>
</head>
<body>
<header >
    <nav id="navbar">
        <div class="container">
            <h2 class="logo">پنل ادمین</h2>
            <ul style="font-family: 'B Yas'; font-size: x-large">
                <li><a class="in_page" href="/adminPanel.php">خانه</a></li>
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
    <div class="info_style">
        <div class="info_Img">
            <img alt="AdminPic" src="/images/1.jpg" />
        </div>
        <div class="information">
            <ul>
                <li><p>نام :<?=$user->name?></p></li>
                <li><p>نام خانوادگی :<?=$user->familyname?></p></li>
                <li><p>نام کاربری :<?=$user->username?></p></li>
            </ul>
        </div>
    </div>

</header>



<div style="padding-bottom: 100px">
    <table style=" caption-side: top;">
        <caption >سوالات پرسیده شده</caption>
        <tr>
            <th >سوال پرسیده شده</th>
            <th>ایمیل شخص</th>
            <th>عملیات</th>
        </tr>
        <?php 
            $temp = sqlSelect("contact",[],[],[],[],[]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  ?>
        <tr>
            <td><?=$thisOBJ->text?></td>
            <td><?=$thisOBJ->email?></td>
            <td><a href="/ex/deletecontactex.php?id=<?=$thisOBJ->id?>" style="color: blue">حذف</a></td>
        </tr>
             <?php endforeach ?>
    </table>
</div>


<div style="padding-bottom: 100px">

    <table style=" caption-side: top;">
        <caption >نظرات جدید</caption>
        <tr>
            <th>کد محصول</th>
            <th>نظر شخص</th>

        </tr>
        <?php 
            $temp = sqlSelect("comment",[],[],[],[],[]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  ?>
        <tr>
            <td><?=$thisOBJ->product_id?></td>
            <td><?=$thisOBJ->text?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>


<div style="padding-bottom: 100px">
    <table style=" caption-side: top;">
        <caption >خرید ها</caption>
        <tr>
            <th >کد کاربری </th>
            <th>کد محصول</th>
            <th>قیمت </th>
            <th> </th>
        </tr>
         <?php 
            $temp = sqlSelect("pay",[],[],[],[],[]);
            $temp = $temp['result'];
            foreach ($temp as $key => $thisOBJ):  ?>
        <tr>
            <td><?=$thisOBJ->user_id?></td>
            <td><?=$thisOBJ->product_id?></td>
            <td><?=$thisOBJ->price?></td>
            <td><a href="/ex/deletepayex.php?id=<?=$thisOBJ->id?>" style="color: blue">حذف</a></td>
        </tr>   
        <?php endforeach ?>
    </table>
</div>


</body>
</html>
