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



<?php 
  //导入指定文字的界面。
  function loadpage($ee) {
    include('part/public-part/title.php');
  }
  loadpage("编辑开票信息"); // 调用函数
  //导入编辑开票页面
  include('part/kpxx/edit-kpxx.php');
  //公共部分按钮
  include('part/public-part/bottom-button.php')

?> 


</body>
</html>