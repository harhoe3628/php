<?php
    error_reporting(0); //不顯示錯誤訊息
    session_start();    //啟動session保存使用者資料
    if (!$_SESSION["id"]) {
    //檢查資料id是否為空 是的話執行下行
        echo "請先登入";
        //輸出 請先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        //上行代碼執行完經過3秒後,自動跳轉到2.login.html
    }
    else{
    //否則
        echo "歡迎, ".$_SESSION["id"].
        "[<a href=12.logout.php>登出</a>] 
        [<a href=18.user.php>管理使用者</a>] 
        [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        //輸出 歡迎,(資料id) ,
        //輸出 登出 的超連結文字,點擊後跳轉到12.logout.php
        //輸出 管理使用者 的超連結文字.點擊後跳轉到18.user.php
        //輸出 新增佈告 的超連結文字,點擊後跳轉到22.bulletin_add_form.php

        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   
        //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust,並將連線結果存進變數conn
        $result=mysqli_query($conn, "select * from bulletin");
        //藉由變數conn查詢bulletin資料表的資料並將結果儲存至變數result
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        //輸出 邊框兩像素 五個內容:佈告編號.佈告類別.標題.佈告內容.發布時間 的表格

        while ($row=mysqli_fetch_array($result)){
        //呼叫變數result的資料並藉while迴圈逐筆存入變數row
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            //建立新欄,並輸出 修改 的超連結文字,點擊後跳轉到26.bulletin_edit_form.php,並在網址後加上 ?bid=(資料bid)
            //在同一欄輸出 刪除 的超連結文字,點擊後跳轉到28.bulletin_delete.php,並在網址後加上 ?bid=(資料bid),接著結束這一列
            echo $row["bid"];   //從變數row輸出資料bid進新欄
            echo "</td><td>";   //建立新欄
            echo $row["type"];  //從變數row輸出資料type進新欄
            echo "</td><td>";   //建立新欄
            echo $row["title"]; //從變數row輸出資料title進新欄
            echo "</td><td>";   //建立新欄
            echo $row["content"];   //從變數row輸出資料content進新欄
            echo "</td><td>";   //建立新欄
            echo $row["time"];  //從變數row輸出資料time進新欄
            echo "</td></tr>";  //結束這一列
        }
        echo "</table>";    //結束表格
    
    }

?>
