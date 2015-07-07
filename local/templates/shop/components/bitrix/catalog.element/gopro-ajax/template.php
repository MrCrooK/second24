<div style="height: 100%; overflow:hidden;position: relative; " class="fview js-element js-elementid<?=$arResult['ID']?> <?if($HAVE_OFFERS):?>offers<?else:?>simple<?endif;?><?
	if( isset($arResult['DAYSARTICLE2']) || isset($PRODUCT['DAYSARTICLE2']) ) { echo ' da2'; }
	if( isset($arResult['QUICKBUY']) || isset($PRODUCT['QUICKBUY']) ) { echo ' qb'; }
	?> propvision1 clearfix" data-elementid="<?=$arResult['ID']?>" <?
	?> data-elementname="<?=CUtil::JSEscape($arResult['NAME'])?>"<?
	?>>
	<i class="icon da2qb"></i>
<div style="float: left; width: 400px; border-right: 5px solid #eee;height: 100%;">

<?
if(isset($arResult['FIRST_PIC_DETAIL']['SRC']))
$img=$arResult['FIRST_PIC_DETAIL']['SRC']; 
elseif($arResult['PROPERTIES'][$arParams['PROP_SKU_MORE_PHOTO']]['VALUE'][0]['SRC'])
$img = $arResult['PROPERTIES'][$arParams['PROP_SKU_MORE_PHOTO']]['VALUE'][0]['SRC'];
else 
$img=$arResult['NO_PHOTO']['src'];
?>

<div style="margin: 0; height: 600px; overflow: hidden;">
<i class="icon da2qb"></i>
<img class="big_photo" src="<?=$img?>" alt="<?=$arResult['FIRST_PIC_DETAIL']['RESIZE']['ALT']?>" title="<?=$arResult['FIRST_PIC_DETAIL']['RESIZE']['TITLE']?>"  width="100%" />
</div>

<?
					if( is_array($arResult['DETAIL_PICTURE']['RESIZE']) )
					{
						$imagesHTML.= '<a rel="nofollow" class="changeimage scrollitem selected" href="#">';
							$imagesHTML.= '<img src="'.$arResult['DETAIL_PICTURE']['RESIZE']['src'].'" ';
								$imagesHTML.= 'alt="'.$arResult['DETAIL_PICTURE']['ALT'].'" ';
								$imagesHTML.= 'title="'.$arResult['DETAIL_PICTURE']['TITLE'].'" ';
								$imagesHTML.= 'data-bigimage="'.$arResult['DETAIL_PICTURE']['SRC'].'" ';
							$imagesHTML.= '/>';
						$imagesHTML.= '</a>';
						$imagesCnt++;
					}
					if( is_array($arResult['PROPERTIES'][$arParams['PROP_SKU_MORE_PHOTO']]['VALUE'][0]['RESIZE']) )
					{
						foreach($arResult['PROPERTIES'][$arParams['PROP_SKU_MORE_PHOTO']]['VALUE'] as $arImage)
						{
							$imagesHTML.= '<a rel="nofollow" class="changeimage scrollitem" href="#">';
								$imagesHTML.= '<img src="'.$arImage['RESIZE']['src'].'" ';
									$imagesHTML.= 'alt="'.$arResult['NAME'].'" ';
									$imagesHTML.= 'title="'.$arResult['NAME'].'" ';
									$imagesHTML.= 'data-bigimage="'.$arImage['SRC'].'" ';
								$imagesHTML.= '/>';
							$imagesHTML.= '</a>';
							$imagesCnt++;
						}
					}
?>
<div class="picslider horizontal scrollp">
	<a rel="nofollow" class="scrollbtn prev page" href="#"><i class="icon pngicons"></i></a>
	<a rel="nofollow" class="scrollbtn next page" href="#"><i class="icon pngicons"></i></a>
	<div class="d_jscrollpane scroll horizontal-only" id="d_scroll_230">
		<div class="sliderin scrollinner" style="width:<?=($imagesCnt*112)?>px;">
			<?echo $imagesHTML;?>
		</div>
	</div>
</div>
<div class="zoom_el"></div>

</div>
<div style="float: right; width: 835px">
<div style="padding: 15px;">
<h1><?=$arResult["NAME"]?></h1>
<table class="groupedprops"><tbody>
<?echo '<tr><td><div class="line"><span>'.$arResult["PROPERTIES"][$arParams['PROP_SKU_ARTICLE']]["NAME"].'</span></div></td><td><div class="val">'.$arResult["PROPERTIES"][$arParams['PROP_SKU_ARTICLE']]["VALUE"].'</div></td></tr>';?>
</tbody></table>
<div class="price">
<?if($arResult['MIN_PRICE']['DISCOUNT_DIFF']) { ?>
<span class="newprice"><?=$arResult['MIN_PRICE']['PRINT_DISCOUNT_VALUE']?></span><br>
<span class="oldprice"><?=$arResult['MIN_PRICE']['PRINT_VALUE']?></span> <span class="pricecom">Вы экономите: <?=$arResult['MIN_PRICE']['PRINT_DISCOUNT_DIFF']?></span>
<?} else {?>
<span class="newprice"><?=$arResult['MIN_PRICE']['PRINT_VALUE']?></span>
<?}?>
</div>
<?
		// ADD2BASKET
		?><noindex><div class="buy clearfix"><?
			?><form class="add2basketform js-buyform<?=$arResult['ID']?> js-synchro<?if(!$PRODUCT['CAN_BUY']):?> cantbuy<?endif;?> clearfix " name="add2basketform"><?//in
				?><input type="hidden" name="<?=$arParams['ACTION_VARIABLE']?>" value="ADD2BASKET"><?
				?><input type="hidden" name="<?=$arParams['PRODUCT_ID_VARIABLE']?>" class="js-add2basketpid" value="<?=$PRODUCT['ID']?>"><?/*
				if($arParams['USE_PRODUCT_QUANTITY'])
				{
					?><span class="quantitytitle"><?=GetMessage('CT_BCE_QUANTITY')?>   </span><?
					?><span class="quantity"><?
						?><a class="minus js-minus">-</a><?
						?><input type="text" class="js-quantity" name="<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>" value="<?=$PRODUCT['CATALOG_MEASURE_RATIO']?>" data-ratio="<?=$PRODUCT['CATALOG_MEASURE_RATIO']?>"><?
						if($arParams['OFF_MEASURE_RATION']!='Y') {
							?><span class="js-measurename"><?=$PRODUCT['CATALOG_MEASURE_NAME']?></span><?
						}
						?><a class="plus js-plus">+</a><?
					?></span><?
				}*/
				?><a rel="nofollow" class="submit add2basket" href="#" title="<?=GetMessage('ADD2BASKET')?>"><i class="icon pngicons"></i><?=GetMessage('CT_BCE_CATALOG_ADD')?></a><?
				?><a rel="nofollow" class="inbasket" href="<?=$arParams['BASKET_URL']?>" title="<?=GetMessage('INBASKET_TITLE')?>"><i class="icon pngicons"></i><?=GetMessage('INBASKET')?></a><?
				?><a rel="nofollow" class="go2basket" href="<?=$arParams['BASKET_URL']?>"><?=GetMessage('INBASKET_TITLE')?></a><?
				?><a rel="nofollow" class="buy1click detail fancyajax fancybox.ajax" href="<?=SITE_DIR?>buy1click/" title="<?=GetMessage('BUY1CLICK')?>"><?=GetMessage('BUY1CLICK')?></a><?
				/*
				if($PRODUCT['CATALOG_SUBSCRIPTION']=='Y')
				{
					?><a rel="nofollow" class="btn btn1 product2subscribe" href="#" title="<?=GetMessage('SUBSCRIBE_PROD_TITILE')?>"><?=GetMessage('SUBSCRIBE_PROD')?></a><?
				}
				*/
				?><input type="submit" name="submit" class="noned" value="" /><?
			?></form><?
		?></div></noindex><?
?>
<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
<div class="yashare-auto-init" data-yashareImage="https://second24.ru<?=$img?>" data-yashareDescription="<?=$arResult["PREVIEW_TEXT"]?>" data-yashareTitle="<?=$arResult["NAME"]?>" data-yashareLink="https://second24.ru<?=$arResult["DETAIL_PAGE_URL"]?>" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus" data-yashareTheme="counter"></div>
</div>


<div class="detail-text" style="border-top: 5px solid #eee; padding: 15px;margin-bottom: 61px;">
<?=$arResult['DETAIL_TEXT']?>
<table class="groupedprops"><tbody>
<?foreach($arResult["DISPLAY_PROPERTIES"] as $k => $v) {echo '<tr><td><div class="line"><span>'.$v["NAME"].'</span></div></td><td><div class="val">'.$v["VALUE"].'</div></td></tr>';}?>
</tbody></table>
</div>



</div>
<div class="clear"></div>
</div>
<div style="text-align: center;border-top: 1px solid #eee; padding: 15px 0; height: 30px;background: #fff;margin-top: -61px;position: absolute;  width: 100%;">
<a href="<?=$arResult["DETAIL_PAGE_URL"]?>" class="button button_big"><span class="button__title">Больше информации о товаре</span></a>
</div>

<script>
$(document).ready(function(){
/* Фото в быстром просмотре */
  $( ".big_photo" ).bind( "mouseenter", function( event ) {
    $(".zoom_el").html('<img class="biiiigphoto" src="'+$( ".big_photo" ).attr('src')+'" width="200%">');
    $(".zoom_el").show();
  });
  $( ".big_photo" ).bind( "mouseleave", function( event ) {
    $('.biiiigphoto').remove();
    $(".zoom_el").hide();
  });
  $( ".big_photo" ).bind( "mousemove", function( event ) {
    var pos = $(this).offset();
    var elem_left = pos.left;
    var elem_top = pos.top;
    // положение курсора внутри элемента
    var Xinner = (event.pageX - elem_left)/$( ".big_photo" ).width();
    var Yinner = (event.pageY - elem_top)/$( ".big_photo" ).height();
    var scale = 515/$('.big_photo').height()*2;


    $(".zoom_el img").css({left: '-'+Xinner*835+'px', top: '-'+Yinner*2000+'px', });
  });
/* Конец Фото в быстром просмотре */

/* Выбор превьюшки */
$('.changeimage').bind( "click", function( event ) {
    $('.changeimage').removeClass('selected');
    $(this).addClass('selected');
    $('.big_photo').attr('src',$(this).find('img').attr('data-bigimage'));
    return false;
});
/* Конец выбора преью */


/* Слайдер */
$('.picslider .next').bind( "click", function( event ) {

    api.scrollTo( api.getContentPositionX()+110,0);
    return false;
});

$('.picslider .prev').bind( "click", function( event ) {
    api.scrollTo( api.getContentPositionX()-110,0);
    return false;
});

var element = jQuery('.d_jscrollpane').jScrollPane({animateScroll: true});
var api = element.data('jsp');
/* Конец Слайдера */

$('.size-chooser__system-select .button').bind( "click", function( event ) {
    $(".dropdown").toggle();
    return false;
});

$('.select__item').bind( "click", function( event ) {
    $(".size-chooser__help .dropdown").hide();
    $(".size-chooser__help .select__item").removeClass("select__item_current");
    $(".size-chooser__help .button__title").text($(this).attr("data-option-value"));
    $(".size-chooser__help .size-chooser").text($(this).attr("data-size"));
    $(this).addClass("select__item_current");
    return false;
});


});
</script>