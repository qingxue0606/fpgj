<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no,email=no">
	<title>编辑开票信息</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  

</head>

<body>
<!-- <link rel="stylesheet" href="css/li-1.css">

<div>
  <div class="chk-print">请核对打印机屏幕显示的电子发票</div>
  <div class="pic-invoice">img<img src="" alt=""></div>
  <div class="pic-invoice">img<img src="" alt=""></div>
  <div class="pic-invoice">img<img src="" alt=""></div>
  <div class="pic-invoice">img<img src="" alt=""></div>

</div>
 -->





<?php 
  //导入指定文字的界面。
  function loadpage($ee) {

    include('part/public-part/title.php');
    include('part/e-invoice/invoice-print.php');
    include('part/public-part/foot_fp-two.php');
  }
  loadpage("打印确认"); // 调用函数


?> 


</body>
</html>