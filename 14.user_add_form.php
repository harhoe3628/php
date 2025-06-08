<html>
    <head><title>新增使用者</title></head>
    <!--標題顯示 新增使用者-->
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
    else{   //檢查session是否有儲存id 有就執行下行
        echo 
            "<form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>"
        //提交資料至 15.user_add.php
        //增加帳號輸入欄位 並設定變數為id
        //增加密碼輸入欄位 並設定變數為pwd
        //增加登入按鈕 顯示登入 ； 增加清除按鈕 顯示清除
        ;
        
    }
?>
    </body>
</html>
