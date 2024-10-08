<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>檔案上傳</title>
</head>
<body>
    <div class="img" align="center"><img  src="images/j11.jpg" alt=""></div>
    <p align="center">歡迎使用檔案上傳系統
        <form method="post" action="upload_01.php" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <input type="file" name="myfile" size="50"><br><br>
            <input type="submit" value="上傳">
            <input type="reset" value="重製">
        </form>
    </p>
</body>
</html>