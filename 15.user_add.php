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
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   //將變數id及變數pwd 存入user表格的id欄位及pwd欄位
   echo $sql;
   //輸出 insert into user(id,pwd) values('變數id的值', '變數pwd的值')
   if (!mysqli_query($conn, $sql)) {  //如果mysqli_query($conn, $sql)執行失敗 執行下行
    echo "新增命令錯誤"; 
    //輸出 新增命令錯誤
   }
   else{  //如果mysqli_query($conn, $sql)執行成功 執行下行
     echo "新增使用者成功，三秒鐘後回到網頁"; 
     //輸出 新增使用者成功，三秒鐘後回到網頁
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; 
     //三秒後跳轉到 18.user.php
   }
}
?>
