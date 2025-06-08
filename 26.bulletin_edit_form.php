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
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        //藉由變數conn查詢bulletin資料表的符合變數bid的資料並將結果儲存至變數result
        $row=mysqli_fetch_array($result);
        //呼叫變數result的資料並存為變數row
        $checked1="";
        $checked2="";
        $checked3="";
        //設定三個變數checked來決定哪個預設要是已選取狀態
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        //根據變數row存取的type來決定哪個變數checked為選取狀態
        echo 
        "<html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：
                    <input type=radio name=type value=1 {$checked1}>系上公告 
                    <input type=radio name=type value=2 {$checked2}>獲獎資訊
                    <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>"
        //
        //(標題)新增佈告
        //
        //(建立表單 結束後提交資料到27.bulletin_edit.php)
        //佈告編號:(變數row存取的bid)(隱藏欄位bid 值為變數row的bid)
        //標題:(文字輸入欄位title 值為變數row的title)
        //內容:(多行輸入欄位 高度20行 寬度20欄content 值為變數row的content)
        //佈告類型
        //(單選按鈕type=1 根據變數checked決定是否為選取狀態)系上公告
        //(單選按鈕type=2 根據變數checked決定是否為選取狀態)獲獎資訊
        //(單選按鈕type=3 根據變數checked決定是否為選取狀態)徵才資訊
        //發布時間:(時間選擇欄位time 值為變數row的time)
        //(送出按鈕submit)修改佈告 (清除按鈕reset)清除
        //
        //
        //
        ;
    }
?>
