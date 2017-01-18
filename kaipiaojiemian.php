<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>开票信息</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="css/kpxx/kpxx.css"> -->
	<script src="libs/js/jquery-3.1.0.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
</head>



<body>


	<?php
		//公共title
		include ("part/public-part/title.php");
		//开票信息内容部分
		include ("part/kpxx/content-kpxx.php");
		//公共三列底部
		include ("part/public-part/foot_fp.php");
		include("part/kpxx/wrap-qr.php");
	?> 
	<!-- 开票信息页面二维码出现出消失 -->
	<script>
		$(function(){
			$('.shut').click(function(event) {
				$('.wrap-qr').toggle();
			});
			$('.taitou-qr').click(function(event) {
				$('.wrap-qr').toggle();
			});

			
		})
	</script>





		
</body>
</html>