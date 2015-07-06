var RSGoPro_Hider_called = false;

function RSGoPro_DetectTable() {
	$('.artables').each(function(i){
		var $artables = $(this);
		if($artables.outerWidth(true)<$artables.find('.products').outerWidth(true) && !$artables.hasClass('adap'))
		{
			$artables.addClass('adap');
		}
	});
}

// hide filter and sorter when goods is empty
function RSGoPro_Hider() {
	RSGoPro_Hider_called = true;
	$('.sidebar, .mix, .navi, .catalogsorter').hide();
	$('.catalog .prods').css('marginLeft','0px');
}

$(document).ready(function(){

$(".fancyboxajaxload")
.fancybox({
        fitToView:false,
        padding: 0,
        margin: 10,
        autoSize:false,
        'width':1240, 
        'height':parseInt($(window).height()  - 20 ),
        'autoScale':false,
        'type': 'ajax',
        transitionIn: 'none',
        transitionOut: 'none',
        tpl: {
wrap     : '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer" style="padding:0"><div class="fancybox-inner"></div></div></div></div>',
closeBtn : '<a title="Close" class="fancybox-item fancybox-closes" href="javascript:;"><i class="iconpngicons"></i></a>',
}
}); //.attr('rel', 'gallery')
	
	
	// fix tables if stupid styles didnt work
	RSGoPro_DetectTable();
	$(window).resize(function(){
		RSGoPro_DetectTable();
	});
	
	if( $('.prices_jscrollpane').length>0 ) {
		RSGoPro_ScrollInit('.prices_jscrollpane');
		$(window).resize(function(){
			RSGoPro_ScrollReinit('.prices_jscrollpane');
		});
	}
	
	$(document).on('mouseenter','.showcase .js-element',function(){
		$(this).addClass('hover');
		return false;
	}).on('mouseleave','.showcase .js-element',function(){
		$(this).removeClass('hover');
		return false;
	});
	
	if(RSGoPro_Hider_called) {
		RSGoPro_Hider();
	}
	
});