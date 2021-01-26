 <!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/adminPanel.css" />
    <title>AdminPanell</title>
  </head>
  <body>
 
 <?php
if (isset($_POST["ub"])) {
    echo "<div class=uploadtext>";
    if (!empty($_FILES["file"])) {
        $filename = "../images/".$_FILES["file"]["name"];
        $filetmp =$_FILES["file"]["tmp_name"];
        if (is_uploaded_file($filetmp)) {
            if(move_uploaded_file($filetmp, $filename)) {
                echo "<p style='text-align: center'>فایل با موفقیت بارگزلری شد</p>";
                echo '<a href="'.$filename.'">ادرس فایل </a>';
            }
        } else {
            echo "<p style='text-align: center'>مشکل در آپلود</p>";
        }
    } else {
        echo "<p style='text-align: center'>فایلی انتخاب نشده است</p>";
    }
}
?> 
  </body>
</html>