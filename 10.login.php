<?php
  $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   
  //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust,並將連線結果存進變數conn
  $result=mysqli_query($conn, "select * from user");
  //藉由變數conn查詢user資料表的資料並將結果儲存至變數result

  $login=false;
  //預設變數login為 否
  while ($row=mysqli_fetch_array($result)) { 
  //呼叫變數result的資料並藉while迴圈逐筆存入變數row
    if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
    //如果資料id與接收到的變數id資料相符,且資料pwd與接收到的變數pwd符合,執行括號內容
    $login=TRUE;
    //變數login設為 是
    }
  }
  if ($login==TRUE) {
    //如果變數login內容為 是,執行下行
    session_start();
    //啟動session保存使用者資料
    $_SESSION["id"]=$_POST["id"];
    //儲存接收到的資料id
    echo "登入成功";
    //輸出 登入成功
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    //上行代碼執行完經過3秒後,自動跳轉到11.bulletin.php
  }

  else{
    //否則
    echo "帳號/密碼 錯誤";
    //輸出 帳號/密碼 錯誤
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    //上行代碼執行完經過3秒後,自動跳轉到2.login.html
  }
?>
