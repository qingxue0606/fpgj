<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no,email=no">
	<title>邮箱列表界面</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="libs/js/jquery-3.1.0.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  

</head>

<body>
     

<?php 
  //导入指定文字的界面。
  function loadpage($ee) {
    include('part/public-part/title.php');
    include('part/gather-invoice/mail-gather.php');
    include('part/public-part/bottom-button.php');




  }
  loadpage("邮箱导入"); // 调用函数
?> 


</body>
</html>