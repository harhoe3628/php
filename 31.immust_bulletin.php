<html><!---->
    <head><title>明新科技大學資訊管理系</title>
    <!--(標題)明新科技大學資訊管理系-->
    <meta charset="utf-8">
    <!--使用UTF-8 編碼格式-->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <!--引入 FlexSlider 的 CSS 樣式表-->
    <!--載入 jQuery 函式庫-->
    <!--載入 FlexSlider 的 JavaScript 程式-->        
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
    <!--確認整個網頁都載入完才執行-->
    <!--選取為flexslider的元素 並啟用FlexSlider設定-->
    <!--動畫效果是slide-->
    <!--從右向左輪播(Right-To-Left)-->
    <!---->
    <!---->
    <style>
        *{
            margin:0;
            color:gray;
            text-align:center;
        }
        /*選取所有元素
        外距為0
        顏色 灰
        所有文字置中
        */
        .top{
             background-color: white;
        }
        .top .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:10px;
        }
        .top .logo{
            /*border:1px solid red;*/
            font-size: 35px;
            font-weight: bold;
        }
        .top .logo img{
            width: 100px;
            vertical-align: middle;
        }
        .top .top-nav{
            /*border:1px solid red;*/
            font-size: 25px;
            font-weight: bold;       
        }
        .top .top-nav a{
            text-decoration: none;
        }
        /*設定top 
        背景顏色 白
        
        /*top container
        使用flex排版
        內容在垂直方向置中
        左右兩邊的元素靠兩端
        上下左右都內距10px
        
        /*top logo
        -方便檢查區域-
        文字大小35px
        文字加粗
        
        /*top logo img
        圖片寬度為 100px
        圖片垂直與文字對齊
        
        /*top top-nav
        -方便檢查區域-
        文字大小25px
        文字加粗
        
        /*top top-nav a
        移除超連結預設的底線
        */
        /* nav */
        .nav {
            background-color:#333;
            display: flex;
            justify-content: center;
        }
        .nav ul {
            list-style-type: none;  
            margin: 0; 
            padding: 0; 
            overflow: hidden; 
            background-color: #333; 
        }
        .nav li {
            float: left; 
        }
        .nav li a {    
            display: block;  
            color: white;  
            text-align: center;  
            padding: 14px 16px;  
            text-decoration: none;  
        }
        .nav li a:hover {
            background-color: #111; 
        }
        /*設定nav
        背景顏色#333
        使用Flex排版
        內容水平置中

        /*nav ul
        移除列表前的點點
        移除外圍的預設邊距
        移除內部空白距離
        隱藏超出範圍的元素
        背景顏色#333

        /*nav li
        水平向左排列

        /*nav li a
        超連結轉為區塊元素
        顏色 白
        文字置中
        上下內距14px，左右內距16px
        移除預設的底線

        /*nav li a:hover 設定滑鼠放置於上時
        背景顏色$111
        */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        li.dropdown:hover{
            background-color: #333;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        /*下拉式選單 設定子選單
        使用block呈現上下排列

        /*li下拉式選單
        背景顏色#333

        /*子選單內容格式
        預設不顯示，直到滑鼠移入才顯示
        設定絕對定位，讓選單浮現在主選單項目下方
        背景顏色#333
        最小寬度為160px
        堆疊順序1，確保選單浮在其他元素之上

        /*子選單連結內容格式
        顏色 黑
        上下內距12px，左右內距16px
        移除超連結底線
        超連結轉為區塊元素
        文字靠左對齊
        */
        .slider{
            background-color: black;
        }
        /*slider
        背景顏色 黑
        */
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{
            padding: 20px;
        }        
        /*設定banner
        設定背景為從上往下的線性漸層，從#ABDCFF漸變為#0396FF
        內距30px

        /*banner h1
        內距20px
        */
        .faculty {
            display: block;
            justify-content: center;
            background-color:white;
            padding:40px;
        }
        .faculty h2 {
            font-size: 25px;
            color: rgb(50,51,52);
            padding-bottom:40px;
        }
        .faculty .container {
            /*border:1px solid red;*/
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;
            text-decoration: none;
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;
            background-color: rgba(39,40,34,.500);
            text-align: center;           
        }
        /*設定faculty
        設為區塊元素
        --
        背景顏色 白
        內距40px

        /*faculty h2
        字體大小25px
        顏色 rgb(50,51,52)
        下方內距40px

        /*faculty container
        -方便檢查區域-
        使用flex排版
        平均分配空間，左右保留間距
        垂直向上置中

        /*faculty teacher
        -方便檢查區域-
        設為區塊元素
        移除超連結底線

        /*faculty teacher img
        圖片長200px
        圖片寬200px

        /*faculty teacher h3
        文字顏色 白
        背景顏色 rgba(39,40,34,.500)
        內容置中
        */
        .contact {
            display: block;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 30px;                
        }
        .contact h2{
            color: rgb(54, 82, 110);
            font-size: 25px;
        }
        .contact .infos{
            display:flex;
            margin-top: 30px; 
            justify-content: center;
        }
        .contact .infos .left{
            display:block;
            text-align: left;
            margin-right: 30px;
        }
        .contact .infos .left b{
            display:block;
            text-align: left;
            margin-top: 10px;
            text-decoration: bold;
            color: Gray;
            font-size: 18px;
            line-height: 18px;
        }
        .contact .infos .left span{
            display:block;
            text-align: left;
            margin-top: 10px;
            color: rgba(39,40,34,0.5);
            font-size: 16px;
            padding-left: 27px;
        }
        .contact .infos .right{
            height: 200px;               
        }
        .contact .infos .right iframe{
            width: 100%;
            height: 100%;
            border: 1px solid rgba(39,40,34,0.50);
        }
        /*設定contact
        設為區塊元素
        --
        上方外距30px
        下方外距30px

        /*contact h2
        字體顏色 rgb(54, 82, 110)
        字體大小 25px

        /*contact infos
        使用flex排版
        跟上方保持距離30px
        內容置中

        /*contact infos left
        設為區塊元素
        向左對齊
        跟右側間隔30px

        /*contact infos left b
        設為區塊元素
        向左對齊
        行距10px
        --
        顏色 灰
        文字大小18px
        行高18px

        /*contact infos left span
        設為區塊元素
        文字靠左對齊
        行距10px
        文字顏色rgba(39,40,34,0.5)
        文字大小16px
        向左內縮 27px

        /*contact infos right
        高度200px

        /*contact infos right iframe
        讓iframe(嵌入的 Google 地圖)寬100%
        高100%
        1px 的邊框，顏色為rgba(39,40,34,0.50)
        */
        .footer{
            display: flex;
            justify-content: center;
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }
        /*設定footer
        使用flex排版
        水平置中
        背景顏色rgb(25,26,30)
        上下內距30px 左右內距0

        /*登入畫面css*/
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            right: 50px;
            top: 50px;
            width: 20%;
            height: 20%;
            overflow: auto;
            background-color: rgba(255,255,255,0.9);
            padding-top: 50px;
        }  /*登入畫面css*/
        /*設定model
        預設不顯示
        固定在視窗上的指定位置
        圖層順序1
        右邊50px
        上方50px
        畫面寬度20%
        畫面高度20%
        內容超過視窗高度，則自動顯示捲軸
        背景顏色rgba(255,255,255,0.9)
        上方50px間距
        */
        .bulletin{
            display: block;
            justify-content: center;
            background-color: rgb(255,204,153);
            padding: 30px 0;
        }
        .bulletin h1{
            padding:10px;
        }
        .bulletin table{
            border-collapse:collapse;
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
        }
        .bulletin table th{
            background-color: #abdcff;
            color: #ffffff;
        }
        .bulletin table td{
            background-color: #ffffff;
            color: #0396ff;
        }
        /*設定bulletin 佈告欄
        設定為區塊元素
        --
        背景顏色 rgb(255,204,153)   
        上下內距30px 左右內距0

        /*bulletin h1
        內距10px

        /*bulletin table
        合併表格邊框
        字型為 微軟正黑體
        文字大小16px
        實線外框1px 顏色#000

        /*bulletin table th
        背景顏色 #abdcff
        文字顏色 #ffffff

        /*bulletin table td
        背景顏色 #ffffff
        文字顏色 #0396ff
        */
    </style>
    </head>
    <body>
        <div class="top">
        <!--建立class top-->
            <div class="container">
            <!--建立class container-->
                <div class="logo">
                <!--建立class logo-->
                    <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                    明新科技大學資訊管理系
                    <!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG-->
                    <!--輸出明新科技大學資訊管理系-->
                </div>
                <div class="top-nav">
                <!--建立class top-nav-->
                <a href=>明新科大</a>
                <a href=>明新管理學院</a>
                <!--導覽超連結 明新科大-->
                <!--導覽超連結 明新管理學院-->
                <label onclick="document.getElementById('login').style.display='block'">登入</label>
                <!--建立按鈕 登入，點擊時呼叫login-->
                <div id="login" class="modal">
                    <!--建立id為login的class modal-->
                    <span onclick="document.getElementById('login').style.display='none'">&times; </span>管理系統登入
                    <!--建立個可點擊的span" " 點擊後會隱藏login這區塊--><!--輸出 管理系統登入-->
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br/>
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                    <!--建立表單 結束後提交資料至10.login.php-->
                        <!--(建立文字輸入欄位id)-->
                        <!--(建立密碼輸入欄位pwd)-->
                    <!--(建立提交按鈕submit)登入--><!--(建立清除按鈕reset)清除-->
                    <!---->
                </div>  
                </div>
              </div>
        </div>
        <div class="nav">
        <!--建立class nav-->
            <ul>
            <!--建立清單-->
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
                <!--子清單--><!--(建立一個導覽列，點擊跳轉到頁面id="home"的位置)首頁-->
                <!--子清單--><!--(建立一個導覽列，點擊跳轉到頁面id="introduction"的位置)系所簡介-->
                <!--建立子清單class dropdown--><!--(建立一個導覽列，點擊跳轉到頁面id="faculty"的位置)成員簡介-->
                    <!--建立class dropdown-content 內容為選單的子清單-->
                        <!--(建立一個導覽列，點擊跳轉到頁面id="faculty"的位置)黃老師-->
                        <!--(建立一個導覽列，點擊跳轉到頁面id="faculty"的位置)李老師-->
                        <!--(建立一個導覽列，點擊跳轉到頁面id="faculty"的位置)應老師-->
                    <!---->
                <!---->
                <!--子清單--><!--(建立一個導覽列，點擊跳轉到頁面id="about"的位置)相關資訊-->
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!--建立class slider-->
            <!--建立class flexslider-->
                <!--建立選單class slides-->
                    <!--子清單--><!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/slider1.JPG-->
                    <!--子清單--><!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/slider2.JPG-->
                    <!--子清單--><!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/slider3.JPG-->
        <!---佈告欄--->
        <div class="bulletin">
            <h1>最新公告</h1>
            <!--標題 最新公告-->
            <?php
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust,並將連線結果存進變數conn
                $result=mysqli_query($conn, "select * from bulletin");
                //藉由變數conn查詢bulletin資料表的資料並將結果儲存至變數result
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                //設定邊框2px的表格,第一列為 佈告編號 佈告類別 標題 佈告內容 發佈時間
                while ($row=mysqli_fetch_array($result)){
                //呼叫變數result的資料並藉while迴圈逐筆存入變數row
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                    //開始新列及新的儲存格
                    //輸出變數row的bid
                    //結束儲存格並開始新儲存格
                    //如果變數row的type是1 輸出 系上公告
                    //如果變數row的type是2 輸出 獲獎資訊
                    //如果變數row的type是3 輸出 徵才資訊
                    //結束儲存格並開始新儲存格
                    //輸出變數row的title
                    //結束儲存格並開始新儲存格
                    //輸出變數row的content
                    //結束儲存格並開始新儲存格
                    //輸出變數row的time
                    //結束儲存格 結束列
                }
                echo "</table>";//結束表格
            ?>
        </div>
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!--建立class banner,id為introduction-->
            <!--標題 系所簡介-->
            <!--標題 歷年教育部評鑑皆榮獲一等-->
            <!--標題 明新科技大學資訊管理系-->
            <!--標題 全國私立科大第一資管系-->
        <div class="faculty" id="faculty">
            <!--建立class faculty,id為faculty-->
            <h2>師資介紹</h2>
            <!--標題 師資介紹-->
            <div class="container">
            <!--建立class container-->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>
                <!--建立class teacher,點擊後跳轉到-->        
                <!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg-->
                <!--標題 黃老師-->
                <!--建立class teacher,點擊後跳轉到--> 
                <!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg-->
                <!--標題 李老師-->
                <!--建立class teacher,點擊後跳轉到--> 
                <!--輸出圖片https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg-->
                <!--標題 應老師-->
            </div>
        </div>
        <div class="contact" id="about">
            <!--建立class contact,id為about-->
                <h2>相關資訊</h2>
                <!--標題 相關資訊-->
                <div class="infos">
                <!--建立class infos-->
                    <div class="left">
                    <!--建立class left-->
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                        <!--(粗體)明新科技大學管理學院大樓二樓-->
                        <!--(span)304新竹縣新豐鄉新興路1號-->
                        <!--(粗體)電話:03-5593142-->
                        <!--(span)分機:3431、3432、3433-->
                        <!--(粗體)傳真:03-5593142-->
                        <!--(span)分機:3440-->
                    </div>
                    <div class="right">
                    <!--建立class right-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!--使用iframe內嵌Google地圖-->
                            <!--取消邊框 邊框為0 允許全螢幕-->
                    </div>
                </div>
        </div>
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
        <!--建立class footer-->
            <!--(版權符號)Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 B12090007曾岳豐-->
     </body>
</html>
