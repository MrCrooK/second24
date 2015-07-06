<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$HAVE_OFFERS = (is_array($arResult['OFFERS']) && count($arResult['OFFERS'])>0) ? true : false;
if($HAVE_OFFERS) { $PRODUCT = &$arResult['OFFERS'][0]; } else { $PRODUCT = &$arResult; }
?>
<div class="elementdetail js-element js-elementid<?=$arResult['ID']?> <?if($HAVE_OFFERS):?>offers<?else:?>simple<?endif;?><?
	if( isset($arResult['DAYSARTICLE2']) || isset($PRODUCT['DAYSARTICLE2']) ) { echo ' da2'; }
	if( isset($arResult['QUICKBUY']) || isset($PRODUCT['QUICKBUY']) ) { echo ' qb'; }
	?> propvision1 clearfix" data-elementid="<?=$arResult['ID']?>" <?
	?> data-elementname="<?=CUtil::JSEscape($arResult['NAME'])?>"<?
	?>><a name="item"></a>
	<div class="top_item">
		<div class="brand"><img src="/upload/chanel.jpg"></div>
		<h1 class="title_catalog"><?=$arResult['NAME']?></h1>
		<div class="clear"></div>
	</div>
	<div class="clear" style="height: 30px;"></div>
	<div class="main_photo">
		<?
		// PICTURES
			?><div class="pic"><i class="icon da2qb"></i><?
				if(isset($arResult['FIRST_PIC_DETAIL']['SRC']))
				{
					?>
					<img class="big_photo" src="<?=$arResult['FIRST_PIC_DETAIL']['SRC']?>" alt="<?=$arResult['FIRST_PIC_DETAIL']['RESIZE']['ALT']?>" title="<?=$arResult['FIRST_PIC_DETAIL']['RESIZE']['TITLE']?>" />
					<?
				} else {
					?><img src="<?=$arResult['NO_PHOTO']['src']?>" title="<?=$arResult['NAME']?>" alt="<?=$arResult['NAME']?>" /><?
				}
				// TIMERS
				$arTimers = array();
				if( $arResult['HAVE_DA2']=='Y' ) {
					if( isset($arResult['DAYSARTICLE2']) ) {
						$arTimers[] = $arResult['DAYSARTICLE2'];
					} elseif($HAVE_OFFERS) {
						foreach($arResult['OFFERS'] as $arOffer) {
							if( isset($arOffer['DAYSARTICLE2']) ) {
								$arTimers[] = $arOffer['DAYSARTICLE2'];
							}
						}
					}
				} elseif( $arResult['HAVE_QB']=='Y' ) {
					if( isset($arResult['QUICKBUY']) )
					{
						$arTimers[] = $arResult['QUICKBUY'];
					} elseif($HAVE_OFFERS) {
						foreach($arResult['OFFERS'] as $arOffer)
						{
							if( isset($arOffer['QUICKBUY']) )
							{
								$arTimers[] = $arOffer['QUICKBUY'];
							}
						}
					}
				}
				if( is_array($arTimers) && count($arTimers)>0 ) {
					?><div class="timers"><?
						$have_vis = false;
						foreach($arTimers as $arTimer)
						{
							$KY = 'TIMER';
							if(isset($arTimer['DINAMICA_EX']))
							{
								$KY = 'DINAMICA_EX';
							}
							?><div class="timer <?if(isset($arTimer['DINAMICA_EX'])):?>da2<?else:?>qb<?endif;?> js-timer_id<?=$arTimer['ELEMENT_ID']?> clearfix" style="display:<?
								if( ($arResult['ID']==$arTimer['ELEMENT_ID'] || $PRODUCT['ID']==$arTimer['ELEMENT_ID']) && !$have_vis)
								{
									?>inline-block<?
									$have_vis = true;
								} else {
									?>none<?
								}
								?>;" data-datefrom="<?=$arTimer[$KY]['DATE_FROM']?>"><?
								?><div class="clock"><i class="icon"></i></div><?
								?><div class="intimer clearfix" data-dateto="<?=$arTimer[$KY]['DATE_TO']?>"><?
									if($arTimer[$KY]['DAYS']>0){
										?><div class="val"><div class="value result-day"><?
											echo($arTimer[$KY]['DAYS']>9?$arTimer[$KY]['DAYS']:'0'.$arTimer[$KY]['DAYS'] )
											?></div><div class="podpis"><?=GetMessage('QB_AND_DA2_DAY')?></div></div><?
										?><div class="dvoet">:</div><?
									}
									?><div class="val"><div class="value result-hour"><?
										echo($arTimer[$KY]['HOUR']>9?$arTimer[$KY]['HOUR']:'0'.$arTimer[$KY]['HOUR'] )
										?></div><div class="podpis"><?=GetMessage('QB_AND_DA2_HOUR')?></div></div><?
										?><div class="dvoet">:</div><?
									?><div class="val"><div class="value result-minute"><?
										echo($arTimer[$KY]['MINUTE']>9?$arTimer[$KY]['MINUTE']:'0'.$arTimer[$KY]['MINUTE'] )
										?></div><div class="podpis "><?=GetMessage('QB_AND_DA2_MIN')?></div></div><?
									if($arTimer[$KY]['DAYS']<1){
										?><div class="dvoet">:</div><?
										?><div class="val"><div class="value result-second"><?
											echo($arTimer[$KY]['SECOND']>9?$arTimer[$KY]['SECOND']:'0'.$arTimer[$KY]['SECOND'] )
											?></div><div class="podpis "><?=GetMessage('QB_AND_DA2_SEC')?></div></div><?
									}
									if(isset( $arTimer['DINAMICA_EX']) )
									{
										?><div class="val ml da2"><div class="value"><?
											echo($arTimer[$KY]['PHP_DATA']['persent']>9?$arTimer[$KY]['PHP_DATA']['persent']:'0'.$arTimer[$KY]['PHP_DATA']['persent'] )
											?>%</div><div class="podpis"><?=GetMessage('QB_AND_DA2_PRODANO')?></div></div><?
									} elseif( isset($arTimer['TIMER']) && IntVal($arTimer['QUANTITY'])>0 ) {
										?><div class="val ml qb"><div class="value"><?
											echo($arTimer['QUANTITY']);
											?><?=GetMessage('QB_AND_DA2_SHT')?></div><div class="podpis"><?=GetMessage('QB_AND_DA2_SHT')?></div></div><?
									}
								?></div><?
								if(isset( $arTimer['DINAMICA_EX']) )
								{
									?><div class="clear"></div><div class="progressbar"><div class="progress" style="width:<?=$arTimer[$KY]['PHP_DATA']['persent']?>%;"></div></div><?
								}
							?></div><?
						}
					?></div><?
				}
				// /TIMERS
			?></div>
	</div>
	<div class="zoom_item"></div>
	<div class="more_photo">
		<?
			if(isset($arResult['FIRST_PIC_DETAIL']['SRC']))
			{
						$imagesCnt = 0;
						$imagesHTML = '';
						$first = false;
						if($HAVE_OFFERS)
						{
							foreach($arResult['OFFERS'] as $arOffer)
							{
								if( is_array($arOffer['DETAIL_PICTURE']['RESIZE']) )
								{
									$imagesHTML.= '<a rel="nofollow" class="changeimage';
									if($arOffer['ID']==$PRODUCT['ID'])
									{
										$imagesHTML.= ' scrollitem';
									}
									$imagesHTML.= ' imgoffer imgofferid'.$arOffer['ID'].'"';
									if($arOffer['ID']==$PRODUCT['ID'])
									{
										$imagesCnt++;
									} else {
										$imagesHTML.= ' style="display:none;"';
									}
									$imagesHTML.= ' href="#">';
										$imagesHTML.= '<img src="'.$arOffer['DETAIL_PICTURE']['RESIZE']['src'].'" ';
											$imagesHTML.= 'alt="'.$arOffer['DETAIL_PICTURE']['ALT'].'" ';
											$imagesHTML.= 'title="'.$arOffer['DETAIL_PICTURE']['TITLE'].'" ';
											$imagesHTML.= 'data-bigimage="'.$arOffer['DETAIL_PICTURE']['SRC'].'" ';
										$imagesHTML.= '/>';
									$imagesHTML.= '</a>';
								}
								if( is_array($arOffer['PROPERTIES'][$arParams['PROP_SKU_MORE_PHOTO']]['VALUE'][0]['RESIZE']) )
								{
									foreach($arOffer['PROPERTIES'][$arParams['PROP_SKU_MORE_PHOTO']]['VALUE'] as $arImage)
									{
										$imagesHTML.= '<a rel="nofollow" class="changeimage ';
										if($arOffer['ID']==$PRODUCT['ID'])
										{
											$imagesHTML.= ' scrollitem';
										}
										$imagesHTML.= ' imgoffer imgofferid'.$arOffer['ID'].'"';
										if($arOffer['ID']==$PRODUCT['ID'])
										{
											$imagesCnt++;
										} else {
											$imagesHTML.= ' style="display:none;"';
										}
										$imagesHTML.= ' href="#">';
											$imagesHTML.= '<img src="'.$arImage['RESIZE']['src'].'" ';
												$imagesHTML.= 'alt="'.$arOffer['NAME'].'" ';
												$imagesHTML.= 'title="'.$arOffer['NAME'].'" ';
												$imagesHTML.= 'data-bigimage="'.$arImage['SRC'].'" ';
											$imagesHTML.= '/>';
										$imagesHTML.= '</a>';
									}
								}
							}
						}
						if( is_array($arResult['DETAIL_PICTURE']['RESIZE']) )
						{
							$imagesHTML.= '<a rel="nofollow" class="changeimage scrollitem" href="#">';
								$imagesHTML.= '<img src="'.$arResult['DETAIL_PICTURE']['RESIZE']['src'].'" ';
									$imagesHTML.= 'alt="'.$arResult['DETAIL_PICTURE']['ALT'].'" ';
									$imagesHTML.= 'title="'.$arResult['DETAIL_PICTURE']['TITLE'].'" ';
									$imagesHTML.= 'data-bigimage="'.$arResult['DETAIL_PICTURE']['SRC'].'" ';
								$imagesHTML.= '/>';
							$imagesHTML.= '</a>';
							$imagesCnt++;
						}
						if( is_array($arResult['PROPERTIES'][$arParams['PROP_MORE_PHOTO']]['VALUE'][0]['RESIZE']) )
						{
							foreach($arResult['PROPERTIES'][$arParams['PROP_MORE_PHOTO']]['VALUE'] as $arImage)
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
						?><?=$imagesHTML?><?
			}
		?>
	</div>
	<div class="info_item">
			<?
			if(is_array($arResult["CAT_PRICES"]) && count($arResult["CAT_PRICES"])>1)
			{
				?><div class="prices horizontal scrollp"><?
					$cnt = 0;
					$pricesHTML_head = '';
					$pricesHTML_old_price = '';
					$pricesHTML_price = '';
					foreach($arResult['CAT_PRICES'] as $PRICE_CODE => $arResPrice)
					{
						if(!$arResult['CAT_PRICES'][$PRICE_CODE]['CAN_VIEW'])
							continue;
						$arPrice = $PRODUCT['PRICES'][$PRICE_CODE];
						// header
						$pricesHTML_head.= ''.$arResPrice['TITLE'].'';
						// old price
						$pricesHTML_old_price.= '<span class="price old price_pv_'.$PRICE_CODE.'">';
						if( $arPrice['DISCOUNT_DIFF']>0 )
						{
							$pricesHTML_old_price.= $arPrice['PRINT_VALUE'];
						} else {
							$pricesHTML_old_price.= '';
						}
						$pricesHTML_old_price.= '</span>';
						// price
						$pricesHTML_price.= '<span class="price';
						if( $arPrice['DISCOUNT_DIFF']>0 )
						{
							$pricesHTML_price.= ' new';
						}
						$pricesHTML_price.= ' price_pdv_'.$PRICE_CODE.'">'.$arPrice["PRINT_DISCOUNT_VALUE"].'</span>';
						$cnt++;
					}
					?><div class="prs_jscrollpane scroll horizontal-only" id="prs_scroll_<?=$arResult['ID']?>"><?
						?><div class="scrollinner" style="width:<?=($cnt*160)?>px;"><?
										?><?=$pricesHTML_head?><?
										?><?=$pricesHTML_old_price?><?
										?><?=$pricesHTML_price?><?
						?></div><?
					?></div><?
				?></div><?
			} elseif(is_array($arResult["CAT_PRICES"]) && count($arResult["CAT_PRICES"])==1) {
				?><div class="soloprice"><?
					foreach($arResult['CAT_PRICES'] as $PRICE_CODE => $arResPrice)
					{
						if(!$arResult['CAT_PRICES'][$PRICE_CODE]['CAN_VIEW'])
							continue;
						$arPrice = $PRODUCT['PRICES'][$PRICE_CODE];
							if( $arPrice['DISCOUNT_DIFF']>0 )
							{
									?><span class="price old price_pv_<?=$PRICE_CODE?>"><?=$arPrice['PRINT_VALUE']?></span><?
							}
							?><span class="price<?if( $arPrice['DISCOUNT_DIFF']>0 ):?> new<?endif;?> gen price_pdv_<?=$PRICE_CODE?>"><?=$arPrice['PRINT_DISCOUNT_VALUE']?></span><?
					}
				?></div><?
			}
		?>

			<div class="buy_item">	
			<?
			// ADD2BASKET
			?><noindex><div class="buy clearfix"><?
				?><form class="add2basketform js-buyform<?=$arResult['ID']?> js-synchro<?if(!$PRODUCT['CAN_BUY']):?> cantbuy<?endif;?> clearfix" name="add2basketform"><?
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
			?></div></noindex>
			<?
			// COMPARE & FAVORITE & CHEAPER
			?><div class="threeblock clearfix"><?
				// COMPARE
				if($arParams['USE_COMPARE']=='Y')
				{
					?><div class="compare"><?
						?><a rel="nofollow" class="add2compare" href="<?=$arResult['COMPARE_URL']?>"><i class="icon pngicons"></i><?=GetMessage('ADD2COMPARE')?></a><?
					?></div><?
				}
				// FAVORITE & CHEAPER
				if($arParams['USE_FAVORITE']=='Y' || $arParams['USE_CHEAPER']=='Y')
				{
					?><div class="favoriteandcheaper"><?
						// FAVORITE
						if($arParams['USE_FAVORITE']=='Y')
						{
							?><div class="favorite"><?
								?><a rel="nofollow" class="add2favorite" href="#favorite"><i class="icon pngicons"></i><?=GetMessage('FAVORITE')?></a><?
							?></div><?
						}
						// CHEAPER
						if($arParams['USE_CHEAPER']=='Y')
						{
							?><div class="cheaper"><?
								?><a rel="nofollow" class="cheaper detail fancyajax fancybox.ajax" href="<?=SITE_DIR?>cheaper/" title="<?=GetMessage('CHEAPER')?>"><i class="icon pngicons"></i><?=GetMessage('CHEAPER')?></a><?
							?></div><?
						}
					?></div><?
				}
			?></div>
			</div>
			
			<div class="clear"></div>
			
			<div class="description_item">
				<?=$arResult['DETAIL_TEXT']?>
			</div>		
			
			<div class="clear"></div>

			<div class="item_properties"><?

						$arTemp = array();
						if(is_array($arParams['PROPS_TABS']) && count($arParams['PROPS_TABS'])>0)
						{
							foreach($arParams['PROPS_TABS'] as $sPropCode)
							{
								$arTemp[$sPropCode] = $sPropCode;
							}
						}
						$APPLICATION->IncludeComponent('redsign:grupper.list',
							'gopro',
							array(
								'DISPLAY_PROPERTIES' => array_diff_key($arResult['DISPLAY_PROPERTIES'], $arTemp),
								'CACHE_TIME' => 36000,
							),
							$component,
							array('HIDE_ICONS'=>'Y')
						);
					?></div><?
				?></div><?
			?></div>
	<div class="clear"></div>
	</div>
<div class="clear"></div>
</div>