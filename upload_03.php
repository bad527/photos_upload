<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>檔案上傳</title>
    <style>
        .upload-images{
            
            flex-wrap: wrap;
            
        }
        img{
            max-width: 480px;max-height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <p align="center"><img src="images/j11.jpg"></p><br>
    <?php
    //設定用來儲存檔案的資料夾及檔名
    $upload_dir= "./upload.files/";

    // 確認目錄是否存在，若不存在則創建
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    ?>
    <div class="upload-images">
<?php
    for ($i=0; $i < count($_FILES["myfile"]["name"]) ; $i++) { 
        //若檔案不是空字串，表示上傳成功，將暫存的檔案移至指定的資料夾
        if($_FILES["myfile"]["name"][$i]!= ""){
            //搬移檔案
            $upload_file=$upload_dir.iconv("UTF-8","Big5",$_FILES["myfile"]["name"][$i]);
            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$upload_file);
            //顯示檔案資訊
            echo "<div class='image-container'>";
            echo "檔案名稱:".$_FILES["myfile"]["name"][$i]."<br>";
            echo "暫存檔名:".$_FILES["myfile"]["tmp_name"][$i]."<br>";
            echo "檔案大小:".$_FILES["myfile"]["size"][$i]."<br>";
            echo "檔案類型:".$_FILES["myfile"]["type"][$i]."<br>";
            echo "<img src='" . htmlspecialchars($upload_file) . "' alt='Uploaded Image'>";
            echo "</div>";
            echo "<hr>";
        }
   }
   echo "</div> ";
    ?>
</body>
</html>