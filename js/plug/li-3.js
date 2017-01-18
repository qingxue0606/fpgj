"use strict";
;(function ($) {

	var Dialog=function (config) {
		var that=this;

		//默认参数；
		this.config={
			//延迟回调；
			delayCallback:null,
			//对话框信息
			message:null,
			//对话框宽高；
			 width:"auto",
			 height:"auto",
			 //对话框遮罩层透明度
			 maskOpacity:null,
			//按钮配置
			buttons:null,
			//对话框类型
			type:"waiting",
			delay:null,
			//指定遮罩层点击可以关闭
			maskClose:null,
			effect:null


		};
		//默认参数扩展；
		if(config&& $.isPlainObject(config) ){
			$.extend(this.config,config);

		}else{
			this.isConfig=true;
		}
		//创建基本的DOM
		this.body=$("body");
		//创建遮罩层；
		this.mask=$('<div class="g-dialog-container">');
		this.win=$('<div class="dialog-window">');
		this.winHeader=$('<div class="dialog-header">');
		//提示信息
		this.winContent=$('<div class="dialog-content">');
		//创建弹出框按钮；
		this.winFooter = $('<div class="dialog-footer">');
		//渲染DOM
		this.create();



		
		  
	};
	//记录弹窗层级
	Dialog.zIndex=10000;

	Dialog.prototype={
		//定义动画函数
		animate:function () {
			var that=this;
			this.win.css("-webkit-transform","scale(0,0)");
			window.setTimeout(function () {
				 that.win.css("-webkit-transform","scale(1,1)");
			}, 100)
			
		},
		//创建弹出框;
		create:function (argument) {
			 var that=this,
			 	config=this.config,
			 	mask=this.mask,
			 	win= this.win,
			 	header=this.winHeader,
			 	content=this.winContent,
			 	footer=this.winFooter,
			 	body=this.body;
			 	//增加弹窗的层级；
			 	Dialog.zIndex++;
			 	this.mask.css("zIndex",Dialog.zIndex);
			 //如果没有传递任何配置参数，弹出等待的样式
			 if(this.isConfig){
			 	win.append(header.addClass('waiting'));
			 	if(config.effect){
			 		this.animate();
			 	}
			 	
			 	mask.append(win);
			 	body.append(mask);
			 }else{
			 	//根据配置参数创建相应的弹窗
			 	header.addClass(config.type);
			 	win.append(header);
			 	if(config.message){
			 	 	win.append(content.html(config.message)) ;
			 	 }
		 	 	if(config.buttons){
		 	 		this.createButtons(footer,config.buttons);
		 	 		win.append(footer);

		 	 	}
		 	 	mask.append(win);
		 	 	body.append(mask);
		 	 	//设置宽高；
		 	 	if(config.width!="auto"){
		 	 		win.width(config.width);

		 	 	}
		 	 	if(config.height!="auto"){
		 	 		win.height(config.height);
		 	 	}
		 	 	if(config.maskOpacity){
		 	 		mask.css('backgroundColor', 'rgba(0,0,0,'+config.maskOpacity+')');
		 	 	}
		 	 	//设置弹出框弹出后多久看、关闭
		 	 	if(config.delay&& config.delay!= 0) {
		 	 		window.setTimeout(function () {
		 	 			 that.close(); 
		 	 			 //执行延时回调函数
		 	 			 that.config.delayCallback&&that.config.delayCallback();
		 	 		}, config.delay);
		 	 	}
		 	 	if(config.effect){
			 		this.animate();
			 	}
			 	//指定遮罩层点击是否关闭；

			 	if(config.maskClose){

			 		mask.tap(function () {
			 			that.close(); 
			 		});
			 	}

			 	 
			}


		},
		//创建button；
		createButtons:function (footer,buttons) {
			var that=this;
			$(buttons).each(function (i) {
				//获取按钮的样式及文本；
				var type=this.type?'class="'+this.type+'"':'';
				var btnText=this.text?this.text:"按钮"+(++i);
				var callback=this.callback?this.callback:null;

				var button=$('<button '+type+ '>'+btnText+'</button>');
				if(callback){
					button.tap(function (e) {
						 var isClose = callback();
						 //阻止事件冒泡；
						 e.stopPropagation();
						 if(isClose !=false){
						 	that.close(); 


						 }

						  
					})
				}else {
					button.tap(function () {
						e.stopPropagation();
						that.close(); 
					})
				}
				footer.append(button);
			});
		},
		close:function () {
			 
			 this.mask.remove(); 
		}

	};

	window.Dialog=Dialog;
	$.dialog=function (config) {
		 return new Dialog(config); 
	}
		

	  
})(Zepto)