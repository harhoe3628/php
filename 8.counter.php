<?php
    session_start();
    //啟動session保存使用者資料

    if (!isset($_SESSION["counter"]))
    //檢查變數SESSION是否有資料counter
        $_SESSION["counter"]=1;
        //將資料counter設為1
    else
        $_SESSION["counter"]++;
        //將資料counter加1

    echo "counter=".$_SESSION["counter"];
    //輸出 counter(資料counter)
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
    //輸出 重製counter 的超連結文字,點擊後跳轉到9.reset_counter.php
