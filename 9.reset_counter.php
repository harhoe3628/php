<?php
    session_start();
    //啟動session保存使用者資料
    unset($_SESSION["counter"]);
    //重製資料counter
    echo "counter重置成功....";
    //輸出 counter重置成功....
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
    //上行代碼執行完經過兩秒後,自動跳轉回8.counter.php
?>
