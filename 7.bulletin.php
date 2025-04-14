<?php
    error_reporting(0);
    //不顯示錯誤訊息
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   
    //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust,並將連線結果存進變數conn
    $result=mysqli_query($conn, "select * from bulletin");
    //藉由變數conn查詢bulletin資料表的資料並將結果儲存至變數result

    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    //輸出 邊框兩像素 五個內容:佈告編號.佈告類別.標題.佈告內容.發布時間 的表格

    while ($row=mysqli_fetch_array($result)){
    //呼叫變數result的資料並藉while迴圈逐筆存入變數row
        echo "<tr><td>";    //建立新欄
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
?>
