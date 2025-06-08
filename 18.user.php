<html>
    <head><title>使用者管理</title></head> 
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
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                <tr><td></td><td>帳號</td><td>密碼</td></tr>";
                //標題 使用者管理
                //新增使用者 的超連結(跳到 14.user_add_form.php),回布告欄列表 的超連結(跳到 11.bulletin.php)
                //建立邊框1像素的表格
                //輸出表格第一列 /(空格)//帳號//密碼/
            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   
            //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust,並將連線結果存進變數conn
            $result=mysqli_query($conn, "select * from user");
            //藉由變數conn查詢user資料表的資料並將結果儲存至變數result
            while ($row=mysqli_fetch_array($result)) { 
            //呼叫變數result的資料並藉while迴圈逐筆存入變數row
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
                /*
                將row的資料逐列輸出至表格
                每列分別為 /修改 的超連結(跳到19.user_edit_form.php)(點選後將這欄位的id存到變數row)||刪除 的超連結(跳到17.user_delete.php)(點選後將這欄位的id存到變數row)//id欄位的資料//pwd欄位的資料/
                */
            }
            echo "</table>";    //結束表格
        }
    ?> 
    </body>
</html>
