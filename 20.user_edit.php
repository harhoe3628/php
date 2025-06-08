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
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            //使用接收到的id欄位尋找在變數conn中的id欄位 並將那個欄位的pwd更新成接收到的pwd
            echo "修改錯誤";
            //輸出 修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
            //三秒後跳到18.user.php
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            //輸出 修改成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
            //三秒後跳轉到18.user.php
        }
    }

?>
