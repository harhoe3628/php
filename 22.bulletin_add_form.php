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
        echo 
        "<html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：
                    <input type=radio name=type value=1>系上公告 
                    <input type=radio name=type value=2>獲獎資訊
                    <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>"
        //
        //(標題)新增佈告
        //
        //(建立表單 結束後提交資料至23.bulletin_add.php)
        //標題:(文字輸入欄位title)
        //內容:(多行輸入欄位 高度20行 寬度20欄content)
        //佈告類型:
        //(單選按鈕type=1)系上公告
        //(單選按鈕type=2)獲獎資訊
        //(單選按鈕type=3)徵才資訊
        //發布時間:(時間選擇欄位time)
        //(送出按鈕submit)新增佈告 (清除按鈕reset)清除
        //
        //
        //
        ;
    }
?>
