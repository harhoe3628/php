<html>
    <head><title>修改使用者</title></head>
    <body>
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
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        //藉由變數conn查詢user資料表的符合變數id的資料並將結果儲存至變數result
        $row=mysqli_fetch_array($result);
        //呼叫變數result的第一筆資料並存為變數row
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>"
        //建立表單 且結束時將資料傳送至20.user_edit.php
        //產生一個隱藏欄位為id 並將上個頁面的變數row的id放入到欄位
        //輸出 (變數row的id)
        //產生文字輸入欄位為pwd 預設內容為變數row的pwd
        //修改 的按鈕
        ;
    }
    ?>
    </body>
</html>
