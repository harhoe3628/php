<?php
    session_start();
    //啟動session保存使用者資料
    unset($_SESSION["id"]);
    //重製資料id
    echo "登出成功....";
    //輸出 登出成功....
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    //上行代碼執行完經過3秒後,自動跳轉到2.login.html
?>
