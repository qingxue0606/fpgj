<link rel="stylesheet" href="css/e-invoice/invoice-detail.css">
<div class="invoice-detail">
	<div class="row">
		<div class="col-xs-3 item-name">添加备注</div>
		<div class="col-xs-9">北京增值税电子普通发票</div>

	</div>
	<div class="blank-line"></div>


	<div class="row detail-list">
		<div class="col-xs-3 item-name">添加备注</div>
		<div class="col-xs-9">北京增值税电子普通发票Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis repellendus voluptatum quas dolor, enim atque officia nostrum neque sapiente nobis, modi in quae obcaecati architecto porro explicabo, mollitia illum eaque?</div>

	</div>
	<div class="row detail-list">
		<div class="col-xs-3 item-name">添加备注</div>
		<div class="col-xs-9">北京增值税电子普通发票</div>

	</div>
	<div class="row detail-list">
		<div class="col-xs-3 item-name">添加备注</div>
		<div class="col-xs-9">北京增值税电子普通发票</div>

	</div>
	<div class="row detail-list">
		<div class="col-xs-3 item-name">添加备注</div>
		<div class="col-xs-9">北京增值税电子普通发票</div>

	</div>
</div>
<div class="invoice-img">
	<p>img1</p>
	<p>img2</p>
	
</div>
<script>

	//切换标题的分页按钮，可以浏览图片与查看详情。
	$(function(){
		$('.button-detail').click(function(event) {
			$(this).removeClass('selected').addClass('unselected');
			$('.button-invoice').removeClass('unselected').addClass('selected');

			$('.invoice-detail').show();
			$('.invoice-img').hide();
		});
		$('.button-invoice').click(function(event) {
			$(this).removeClass('selected').addClass('unselected');
			$('.button-detail').removeClass('unselected').addClass('selected');

			$('.invoice-detail').hide();
			$('.invoice-img').show();
		});

	})
</script>