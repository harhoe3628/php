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
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        //接收並插入表單資料至bulletin欄位的title content type time
        //內容分別為接收到的資料title content type time
        if (!mysqli_query($conn, $sql)){//如果mysqli_query($conn, $sql執行失敗執行下行
            echo "新增命令錯誤";
            //輸出 新增命令錯誤
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            //輸出 新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
            //3秒後跳轉到11.bulletin.php
        }
    }
?>
