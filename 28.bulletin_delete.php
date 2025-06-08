<?php
    error_reporting(0); //不顯示錯誤訊息
    session_start();    //使用session儲存使用者資料
    if (!$_SESSION["id"]) {
        //檢查session是否有儲存id 沒有就執行下行
        echo "請登入帳號";
        //輸出 請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        //上行代碼執行完經過3秒後,自動跳轉到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust,並將連線結果存進變數conn
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        //根據接收到的bid 將bulletin表格對應的bid欄位及相關欄位刪除
        echo $sql;
        //輸出 DELETE FROM user WHERE bid='{$_GET["bid"]}'
        if (!mysqli_query($conn,$sql)){ //如果mysqli_query($conn,$sql執行失敗 執行下行
            echo "佈告刪除錯誤";
            //輸出 佈告刪除錯誤
        }else{
            echo "佈告刪除成功";
            //輸出 佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        //3秒後跳轉到11.bulletin.php
    }
?>
