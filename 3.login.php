<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))    
    //接收變數id判斷是否符合john,且接收變數pwd判斷是否符合john1234,如果都符合就執行下行
        echo "登入成功";    //輸出 登入成功
    else    //if不符合就執行下行
        echo "登入失敗";    //輸出 登入失敗
?>
