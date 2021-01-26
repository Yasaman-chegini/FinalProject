<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminPanel.css" />
    <title>AdminPanell</title>
  </head>
  <body>
    <!-- upload picture to find its path -->
    <div class="upload">
      <form method="post" enctype="multipart/form-data" action="/ex/uploadex.php">
        <label for="file">آدرس عکس</label>
        <input type="file" name="file" id="file" />
        <input type="submit" name="ub" id="ub" value="آپلود" />
      </form>
    </div> 
    
  </body>
</html>
 