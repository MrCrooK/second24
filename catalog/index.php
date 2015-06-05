<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"gopro", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "10",
		"SECTIONS_VIEW_MODE" => "VIEW_ELEMENTS",
		"HIDE_NOT_AVAILABLE" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPS_FILTER_COLORS" => array(
		),
		"FILTER_PRICE_GROUPED" => array(
		),
		"FILTER_PROP_SCROLL" => array(
		),
		"FILTER_PROP_SEARCH" => array(
		),
		"PROPS_SKU_FILTER_COLORS" => array(
			0 => "COLOR_DIRECTORY",
		),
		"FILTER_SKU_PROP_SCROLL" => array(
			0 => "COLOR_DIRECTORY",
		),
		"FILTER_SKU_PROP_SEARCH" => array(
			0 => "COLOR_DIRECTORY",
		),
		"USE_REVIEW" => "Y",
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "N",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "2",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "N",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "WEIGHT",
			2 => "FORUM_MESSAGE_CNT",
			3 => "RSFAVORITE_COUNTER",
			4 => "FORUM_TOPIC_ID",
			5 => "POHOZHIE",
			6 => "BUY_WITH_THIS",
			7 => "BRAND",
			8 => "YEAR",
			9 => "OS",
			10 => "HEIGHT",
			11 => "TICKNESS",
			12 => "WIDTH",
			13 => "DIAGONAL",
			14 => "SOLUTION",
			15 => "INTERNET_ACCESS",
			16 => "INTERFACES",
			17 => "NAVI",
			18 => "CARD",
			19 => "ACCESSORIES",
			20 => "YEARS",
			21 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
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
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "COLOR_DIRECTORY",
			2 => "COLOR2_DIRECTORY",
			3 => "STORAGE",
			4 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "Y",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
		),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_TOP_DEPTH" => "10",
		"PAGE_ELEMENT_COUNT" => "0",
		"LINE_ELEMENT_COUNT" => "0",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"LIST_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "WEIGHT",
			2 => "OPTIONS",
			3 => "FEATURES_CLOTH",
			4 => "SEX",
			5 => "SIZE",
			6 => "SEASON",
			7 => "COMPOSITION",
			8 => "STYLE",
			9 => "COUNTRY_BREND",
			10 => "COUNTRY_MADE",
			11 => "TEXTURE",
			12 => "COLOR",
			13 => "VIDEO",
			14 => "BUY_WITH_THIS",
			15 => "BRAND",
			16 => "YEAR",
			17 => "OS",
			18 => "HEIGHT",
			19 => "TICKNESS",
			20 => "WIDTH",
			21 => "DIAGONAL",
			22 => "SOLUTION",
			23 => "INTERNET_ACCESS",
			24 => "INTERFACES",
			25 => "NAVI",
			26 => "CARD",
			27 => "ACCESSORIES",
			28 => "",
		),
		"INCLUDE_SUBSECTIONS" => "A",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
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
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "COLOR_DIRECTORY",
			2 => "COLOR2_DIRECTORY",
			3 => "STORAGE",
			4 => "MORE_PHOTO",
			5 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "WEIGHT",
			2 => "OPTIONS",
			3 => "FEATURES_CLOTH",
			4 => "SEX",
			5 => "SIZE",
			6 => "SEASON",
			7 => "COMPOSITION",
			8 => "STYLE",
			9 => "COUNTRY_BREND",
			10 => "COUNTRY_MADE",
			11 => "TEXTURE",
			12 => "COLOR",
			13 => "VIDEO",
			14 => "BRAND",
			15 => "YEAR",
			16 => "OS",
			17 => "HEIGHT",
			18 => "TICKNESS",
			19 => "WIDTH",
			20 => "DIAGONAL",
			21 => "SOLUTION",
			22 => "INTERNET_ACCESS",
			23 => "INTERFACES",
			24 => "NAVI",
			25 => "CARD",
			26 => "YEARS",
			27 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
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
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "COLOR_DIRECTORY",
			2 => "COLOR2_DIRECTORY",
			3 => "STORAGE",
			4 => "MORE_PHOTO",
			5 => "",
		),
		"PROPS_TABS" => array(
			0 => "VIDEO",
			1 => "POHOZHIE",
		),
		"USE_CHEAPER" => "Y",
		"USE_BLOCK_MODS" => "Y",
		"LINK_IBLOCK_TYPE" => "catalog",
		"LINK_IBLOCK_ID" => "2",
		"LINK_PROPERTY_SID" => "CML2_LINK",
		"LINK_ELEMENTS_URL" => "",
		"USE_ALSO_BUY" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "5",
		"ALSO_BUY_MIN_BUYES" => "2",
		"USE_STORE" => "Y",
		"USE_STORE_PHONE" => "N",
		"USE_STORE_SCHEDULE" => "N",
		"USE_MIN_AMOUNT" => "Y",
		"MIN_AMOUNT" => "10",
		"STORE_PATH" => "/store/#store_id#",
		"MAIN_TITLE" => "Наличие",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_TEMPLATE" => "gopro",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PROP_MORE_PHOTO" => "MORE_PHOTO",
		"PROP_ARTICLE" => "CML2_ARTICLE",
		"USE_FAVORITE" => "Y",
		"USE_SHARE" => "Y",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"SHORT_SORTER" => "Y",
		"PROP_SKU_MORE_PHOTO" => "MORE_PHOTO",
		"PROP_SKU_ARTICLE" => "CML2_ARTICLE",
		"PROPS_ATTRIBUTES" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
			2 => "STORAGE",
		),
		"PROPS_ATTRIBUTES_COLOR" => array(
			0 => "COLOR_DIRECTORY",
			1 => "COLOR2_DIRECTORY",
		),
		"AJAX_OPTION_ADDITIONAL" => "",
		"FILTER_FIXED" => "N",
		"DETAIL_TABS_VIEW" => "tab",
		"SHOW_PREVIEW_TEXT" => "Y",
		"USE_AUTO_AJAXPAGES" => "N",
		"OFF_MEASURE_RATION" => "N",
		"OFF_SMALLPOPUP" => "N",
		"SORTER_TEMPLATE_NAME_1" => "",
		"SORTER_TEMPLATE_NAME_2" => "",
		"SORTER_TEMPLATE_NAME_3" => "",
		"SORTER_DEFAULT_TEMPLATE" => "",
		"FILTER_TEMPLATE" => "gopro",
		"FILTER_USE_AJAX" => "N",
		"FILTER_PRICE_GROUPED_FOR" => "products",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"SHOW_DEACTIVATED" => "N",
		"MODS_BLOCK_NAME" => "",
		"USE_BLOCK_BIGDATA" => "Y",
		"BIGDATA_BLOCK_NAME" => "",
		"STORES" => array(
		),
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"STORES_TEMPLATE" => "gopro",
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare/?action=#ACTION_CODE#",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>