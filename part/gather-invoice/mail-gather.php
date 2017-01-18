<link rel="stylesheet" href="css/gather-invoice/mail-gather.css">

<div class="mail-gather">
	<div class="pic-mail">
		<img src="img/gather-invoice/qqmail.png" alt="">
	</div>
	<div class="other-mail">——其他邮箱统一登录——</div>
	<form>
		<div class="mail-input">
			<input type="text" class="form-control" placeholder="Text input">
			<div class="mail-btn"> @163.com </div>
		</div>
		
		<input type="text" class="form-control passwd" placeholder="Text input">
	</form>


</div>
<script>
	$(function(){
		$('#save').attr('href', 'mail-togethering.php');
	});
</script>