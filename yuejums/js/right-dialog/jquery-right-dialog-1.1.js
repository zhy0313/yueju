;(function($){
	$.fn.extend({
		rightdialog : function(options){
			var flag =true;
			var settings = $.extend({
				'delscroll' : document.body
			},options);		
		var $wrapper =$('<div class="right-dialog-wrapper"></div>'),
			$mask = $('<div class="right-dialog-mask"></div>'),
			$container = $('<div class="right-dialog-container"></div>'),
			$title = $('<div class="right-dialog-title"><h1><span class="right-dialog-close1">悦居</span>' +
				'<span class="tools pull-right">' +
				'<a class="fa fa-times"></a></span></h1></div>'),
			$content = $('<div class="right-dialog-content"></div>');
		$wrapper.append($mask);
		$container.append($title).append($content);
		$wrapper.append($container);
		$content.load(settings.content); //问题。导入content路径报错
		this.append($wrapper);
		$('.right-dialog-title h1',$wrapper).append(settings.title);
		$container.animate({
			right:'0'
		},500,'swing',function(){
			$('.right-dialog-mask').on('click',function(e){
				var target = $(e.target);
				//target.closest('.right-dialog-wrapper').length==0
				if(target){
					$container.animate({
						right:'-50%'
					},500,'swing',function(){
						$wrapper.remove();
						$(settings.delscroll).css({
							'min-height':1000+'px',
							'overflow':'visible',
							'height':1000+'px'
						});
					});
					flag = false;
					//$('.right-dialog-close',$wrapper).trigger('click');  
					  //问题。点wrapper之外wrapper remove
			}
		});
		});
		$container.css({
			'overflow': 'auto'//问题。wrapper如何显示滚动条
		});
		$(settings.delscroll).css({
			'height':document.documentElement.clientHeight,
			'overflow':'hidden',
			'min-height':0
		});
		if(flag == true){
			$(window).resize(function(){
				$(settings.delscroll).css({
					'height' : document.documentElement.clientHeight
				})
			});
		};
		$('.right-dialog-close1',$wrapper).on('click',function(){
			$container.animate({
				right:'-50%'
			},500,'swing',function(){
				$wrapper.remove();
				$(settings.delscroll).css({
					'min-height':1000+'px',
					'overflow':'visible',
					'height':1000+'px'
				});
				flag = false;
			});
			
		});
		$('.right-dialog-title .fa.fa-times',$wrapper).on('click',function(){
			$container.animate({
				right:'-50%'
			},500,'swing',function(){
				$wrapper.remove();
				$(settings.delscroll).css({
					'min-height':1000+'px',
					'overflow':'visible',
					'height':1000+'px'
				});
				flag = false;
			});
		});
		
		
	}
	});
})(jQuery);