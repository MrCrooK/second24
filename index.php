<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Секонд Хенд интернет магазин одежды. Купить одежду: женскую, мужскую, детскую; обувь, аксессуары в брендовом интернет-магазине сток и Second Hand");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banners", 
	array(
		"RSGOPRO_LINK" => "LINK",
		"RSGOPRO_ALONE" => "ALONE",
		"RSGOPRO_BLANK" => "BLANK",
		"RSGOPRO_TITLE1" => "TITLE1",
		"RSGOPRO_TITLE2" => "TITLE2",
		"RSGOPRO_TEXT" => "TEXT",
		"RSGOPRO_CHANGE_SPEED" => "2000",
		"RSGOPRO_CHANGE_DELAY" => "8000",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "presscenter",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "BANNER_TYPE",
			2 => "BLANK",
			3 => "TITLE1",
			4 => "TITLE2",
			5 => "TEXT",
			6 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"RSGOPRO_BANNER_TYPE" => "BANNER_TYPE",
		"RSGOPRO_BANNER_HEIGHT" => "402",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RSGOPRO_BANNER_VIDEO_MP4" => "VIDEO_MP4",
		"RSGOPRO_BANNER_VIDEO_WEBM" => "VIDEO_WEBM",
		"RSGOPRO_BANNER_VIDEO_PIC" => "VIDEO_PIC",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"RSGOPRO_PRICE" => "-"
	),
	false
);?> 

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"main", 
	array(
		"IBLOCK_TYPE" => "1c_catalog",
		"IBLOCK_ID" => "20",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"SHOW_COUNT_LVL1" => "8",
		"SHOW_COUNT_LVL2" => "11",
		"BLOCK_NAME" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "N"
	)
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"main", 
	array(
		"IBLOCK_TYPE" => "presscenter",
		"IBLOCKS" => array(
			0 => "13",
			1 => "14",
		),
		"NEWS_COUNT" => "4",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "IBLOCK_NAME",
			2 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"BLOCK_NAME" => ""
	),
	false
);
?>

<div class="sorter_and_name clearfix">
	<h3 class="name">Лучшие товары</h3>
	<div class="sorter">
	<?
global $alfaCTemplate, $alfaCSortType, $alfaCSortToo, $alfaCOutput;
$APPLICATION->IncludeComponent('redsign:catalog.sorter', 'gopro', array(
	'ALFA_ACTION_PARAM_NAME' => 'alfaction',
	'ALFA_ACTION_PARAM_VALUE' => 'alfavalue',
	'ALFA_CHOSE_TEMPLATES_SHOW' => 'Y',
	'ALFA_CNT_TEMPLATES' => '3',
	'ALFA_DEFAULT_TEMPLATE' => 'showcase',
	'ALFA_CNT_TEMPLATES_0' => 'Список',
	'ALFA_CNT_TEMPLATES_NAME_0' => 'table',
	'ALFA_CNT_TEMPLATES_1' => 'Галерея',
	'ALFA_CNT_TEMPLATES_NAME_1' => 'gallery',
	'ALFA_CNT_TEMPLATES_2' => 'Витрина',
	'ALFA_CNT_TEMPLATES_NAME_2' => 'showcase',
	'ALFA_SORT_BY_SHOW' => 'N',
	'ALFA_OUTPUT_OF_SHOW' => 'N',
	'AJAXPAGESID' => 'ajaxpages_main',
	),
	false
);
?>
	</div>
</div>
<div id="ajaxpages_main" class="ajaxpages_main">
<?
global $APPLICATION,$JSON;
$IS_SORTERCHANGE = 'N';
if($_REQUEST['AJAX_CALL']=='Y' && $_REQUEST['sorterchange']=='ajaxpages_main')
{
	$IS_SORTERCHANGE = 'Y';
	$JSON['TYPE'] = 'OK';
}
$IS_AJAXPAGES = 'N';
if($_REQUEST['ajaxpages']=='Y' && $_REQUEST['ajaxpagesid']=='ajaxpages_main')
{
	$IS_AJAXPAGES = 'Y';
	$JSON['TYPE'] = 'OK';
}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"gopro", 
	array(
		"IBLOCK_TYPE" => "1c_catalog",
		"IBLOCK_ID" => "20",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "timestamp_x",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "",
		"INCLUDE_SUBSECTIONS" => "A",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "15",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "RAZMER_PROIZVODITELYA",
			1 => "FAKTURA_MATERIALA",
			2 => "OSOBENNOSTI_TKANI",
			3 => "RAZMER_ROSSIYSKIY",
			4 => "SEZON",
			5 => "POL",
			6 => "CML2_ARTICLE",
			7 => "CML2_BASE_UNIT",
			8 => "CML2_MANUFACTURER",
			9 => "CML2_TRAITS",
			10 => "CML2_TAXES",
			11 => "STIL",
			12 => "CML2_ATTRIBUTES",
			13 => "CML2_BAR_CODE",
			14 => "RSFAVORITE_COUNTER",
			15 => "FORUM_TOPIC_ID",
			16 => "FORUM_MESSAGE_CNT",
			17 => "POHOZHIE",
			18 => "BUY_WITH_THIS",
			19 => "WEIGHT",
			20 => "VIDEO",
			21 => "BRAND",
			22 => "YEAR",
			23 => "OS",
			24 => "HEIGHT",
			25 => "TICKNESS",
			26 => "WIDTH",
			27 => "DIAGONAL",
			28 => "SOLUTION",
			29 => "INTERNET_ACCESS",
			30 => "INTERFACES",
			31 => "NAVI",
			32 => "CARD",
			33 => "ACCESSORIES",
			34 => "YEARS",
			35 => "",
		),
		"OFFERS_LIMIT" => "0",
		"TEMPLATE_THEME" => "",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"PAGER_TEMPLATE" => "gopro",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "RAZMER_PROIZVODITELYA",
			1 => "RAZMER_ROSSIYSKIY",
			2 => "CML2_ARTICLE",
			3 => "CML2_BASE_UNIT",
			4 => "MORE_PHOTO",
			5 => "CML2_MANUFACTURER",
			6 => "CML2_TRAITS",
			7 => "CML2_TAXES",
			8 => "FILES",
			9 => "CML2_ATTRIBUTES",
			10 => "CML2_BAR_CODE",
			11 => "COLOR_DIRECTORY",
			12 => "COLOR2_DIRECTORY",
			13 => "STORAGE",
			14 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "asc",
		"PROP_MORE_PHOTO" => "-",
		"PROP_ARTICLE" => "-",
		"PROP_ACCESSORIES" => "-",
		"USE_FAVORITE" => "Y",
		"USE_SHARE" => "Y",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"DONT_SHOW_LINKS" => "N",
		"USE_STORE" => "Y",
		"USE_MIN_AMOUNT" => "Y",
		"MIN_AMOUNT" => "10",
		"MAIN_TITLE" => "Наличие на складах",
		"PROP_SKU_MORE_PHOTO" => "MORE_PHOTO",
		"PROP_SKU_ARTICLE" => "CML2_ARTICLE",
		"PROPS_ATTRIBUTES" => array(
			0 => "RAZMER_ROSSIYSKIY",
		),
		"OFFERS_CART_PROPERTIES" => array(
		),
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"AJAXPAGESID" => "ajaxpages_main",
		"IS_AJAXPAGES" => $IS_AJAXPAGES,
		"IS_SORTERCHANGE" => $IS_SORTERCHANGE,
		"AJAX_OPTION_ADDITIONAL" => "",
		"VIEW" => $alfaCTemplate,
		"COLUMNS5" => "Y",
		"USE_AUTO_AJAXPAGES" => "N",
		"PROPS_ATTRIBUTES_COLOR" => array(
		),
		"SET_BROWSER_TITLE" => "Y",
		"EMPTY_ITEMS_HIDE_FIL_SORT" => "Y",
		"OFF_MEASURE_RATION" => "N",
		"OFF_SMALLPOPUP" => "N",
		"COMPARE_PATH" => ""
	),
	false
);?>
</div>
<?
if($IS_AJAXPAGES=='Y' || $IS_SORTERCHANGE=='Y')
{
	$APPLICATION->RestartBuffer();
	if(SITE_CHARSET!='utf-8')
	{
		$data = $APPLICATION->ConvertCharsetArray($JSON, SITE_CHARSET, 'utf-8');
		$json_str_utf = json_encode($data);
		$json_str = $APPLICATION->ConvertCharset($json_str_utf, 'utf-8', SITE_CHARSET);
		echo $json_str;
	} else {
		echo json_encode($JSON);
	}
	die();
}
?>


<h1 class="main-description">ИНТЕРНЕТ-МАГАЗИН SECOND24.RU</h1>
<div>
<p>
Вы любите качественную брендовую одежду, но не готовы платить за эту радость бешенные деньги? Мы тоже. Именно поэтому мы создали свой собственный интернет магазин одежды, обуви и аксессуаров из Европы, Англии и Америки, где всё продаётся по честной цене с минимальной наценкой и доставкой по всей России. Это Честно… а еще и безумно удобно! Любая вещь покупается буквально в 5 кликов мышью, а за качество доставки мы ручаемся своей головой:)
</p><p>
Мы <b>не придумываем цены</b>, <br>
           Мы придумываем - <b>стиль, доступный каждому!</b>
</p>
</p>
</div>

<div style="float: left; width: 400px; margin-right: 13px; margin-top: 30px;margin-bottom: 30px;overflow: hidden;'">
<div class="index-text-box e10"></div>
<h2 style="margin: 15px 0;">Качество</h2>
Мы не просто утверждаем это, мы за это отвечаем! Мы Сами приезжаем в центр отгрузки и тщательно выбираем товар, который подойдет именно Вам!  Теперь стиль и мода со всех уголков света стала доступной, а качественная одежда и обувь - ближе!
</div>

<div style="float: left; width: 400px; margin-right: 13px; margin-top: 30px;margin-bottom: 30px;overflow: hidden;">
<div class="index-text-box e9"></div>
<h2 style="margin: 15px 0;">Эксклюзивность</h2>
Сотрудничая с нами, вы покупаете вещи в единственном экземпляре. Такой вещи больше ни у кого не будет! Покупая у нас эксклюзивные модели в единичном экзепляре вы останетесь довольны. Ведь шопинг - это страсть, благодаря которой вы становитесь счастливыми!
</div>

<div style="float: left; width: 400px; margin-right: 0; margin-top: 30px;margin-bottom: 30px;overflow: hidden;">
<div class="index-text-box e6"></div>
<h2 style="margin: 15px 0;">Политика минимальных наценок</h2>
Мы честны, поэтому озвучиваем всё как есть - в цену одежды, обуви и аксессуаров входит лишь вознаграждение поставщику, зарплата сотруднику, который принял Ваш заказ, оформил посылку и отправил удобным Вам способом и аренда сервера, на котором расположен наш сайт.
</div>

<div class="clear"></div>

<div style="float: left; width: 400px; margin-right: 13px; margin-top: 30px;margin-bottom: 30px;overflow: hidden;">
<div class="index-text-box e11"></div>
<h2 style="margin: 15px 0;">Сервис</h2>
Сервис — это наша обязанность. Покупатель — это наш друг, при общении с ним мы учитываем все пожелания и предложения. Все разногласия решаются исключительно в пользу покупателя. Всю одежду, которая после покупки по какой-либо причине не удовлетворила Вас можно вернуть и получить обратно деньги.
</div>

<div style="float: left; width: 400px; margin-right: 13px; margin-top: 30px;margin-bottom: 30px;overflow: hidden;">
<div class="index-text-box e8"></div>
<h2 style="margin: 15px 0;">Скорость</h2>
Экономить ваше время — это наша задача. Именно поэтому мы разработали простой интерфейс, который поможет Вам легко и всего за несколько кликов заказать понравившуюся вещь. А мы обработаем Ваш заказ максимально быстро и доставим его в самый коротких срок!
</div>

<div style="float: left; width: 400px; margin-right: 0; margin-top: 30px;margin-bottom: 30px;overflow: hidden;">
<div class="index-text-box e7"></div>
<h2 style="margin: 15px 0;">Контроль качества</h2>
Наша компания подбирает только безопасную для кожи одежду, обувь и аксессуары. То, что еще долгое время не потеряет свой внешний вид: швы не разойдутся, обувь не прохудится, пуговицы не отпадут, цвет не потеряет яркость.
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>