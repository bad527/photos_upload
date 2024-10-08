<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>檔案上傳</title>
</head>
<body>
    <p align="center"><img src="images/j11.jpg"></p>
    <?php
    //設定用來儲存檔案的資料夾及檔名
    $upload_dir= "./upload.files/";

    // 確認目錄是否存在，若不存在則創建
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $upload_file=$upload_dir.iconv("UTF-8","Big5",$_FILES["myfile"]["name"]);


    //將上船的檔案由暫存資料夾移至指定的資料夾
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$upload_file)){
        echo "<strong>檔案上傳成功</strong><hr>";

        //顯示檔案資訊
        echo "檔案名稱:".$_FILES["myfile"]["name"]."<br>";
        echo "暫存檔名:".$_FILES["myfile"]["tmp_name"]."<br>";
        echo "檔案大小:".$_FILES["myfile"]["size"]."<br>";
        echo "檔案類型:".$_FILES["myfile"]["type"]."<br>";
        echo "<p><a href='javascript:history.back()'>重新上傳</a></p>";

    }else{
        echo "檔案上傳失敗(".$_FILES["myfile"]["error"].")<br><br>";
        echo "<p><a href='javascript:history.back()'>重新上傳</a></p>";
    }
    ?>
</body>
</html>