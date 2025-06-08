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
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
        //執行mysqli_query用以偵錯,
        //使用接收到的bid欄位尋找在變數conn中的bid欄位,
        //並更新title欄位為接收到的title,
        //更新content欄位為接收到的content,
        //更新time欄位為接收到的time,
        //更新type欄位為接收到的type
        //以上發生錯誤執行下行
            echo "修改錯誤";
            //輸出 修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
            //3秒後跳轉到11.bulletin.php
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            //輸出 修改成功，三秒鐘後回到佈告欄列表
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
            //3秒後跳轉到11.bulletin.php
        }
    }

?>
