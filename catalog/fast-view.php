<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element",
	"gopro-ajax",
	Array(
		"COMPONENT_TEMPLATE" => "gopro-ajax",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "20",
		"ELEMENT_ID" => $_REQUEST["ID"],
		"ELEMENT_CODE" => "",
		"SECTION_ID" => $_REQUEST["SID"],
		"SECTION_CODE" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"PROPERTY_CODE" => array(
			0 => "BRAND",
			1 => "FAKTURA_MATERIALA",
			2 => "OSOBENNOSTI_TKANI",
			3 => "RAZMER_ROSSIYSKIY",
			4 => "SEZON",
			5 => "POL",
			6 => "STIL",		
		),
		"OFFERS_LIMIT" => "0",
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"CHECK_SECTION_ID_VARIABLE" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_STATUS_404" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"USE_COMPARE" => "N",
		"AJAXPAGESID" => "",
		"IS_AJAXPAGES" => "N",
		"PROP_MORE_PHOTO" => "-",
		"PROP_ARTICLE" => "-",
		"PROP_ACCESSORIES" => "-",
		"USE_FAVORITE" => "Y",
		"USE_SHARE" => "Y",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"OFF_MEASURE_RATION" => "N",
		"STORES_TEMPLATE" => "",
		"USE_STORE" => "Y",
		"STORE_PATH" => "",
		"USE_MIN_AMOUNT" => "Y",
		"MIN_AMOUNT" => "",
		"STORES" => "",
		"MAIN_TITLE" => "",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"DISPLAY_COMPARE" => "Y",
		"PRICE_CODE" => array("Розничная цена"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array("RAZMER_PROIZVODITELYA","RAZMER_ROSSIYSKIY","SEZON","POL","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","CML2_ATTRIBUTES"),
		"LINK_IBLOCK_TYPE" => "catalog",
		"LINK_IBLOCK_ID" => "11",
		"LINK_PROPERTY_SID" => "CML2_LINK",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"OFFERS_FIELD_CODE" => array("",""),
		"OFFERS_PROPERTY_CODE" => array("RAZMER_PROIZVODITELYA","RAZMER_ROSSIYSKIY","CML2_ARTICLE","CML2_BASE_UNIT","MORE_PHOTO","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","FILES","CML2_ATTRIBUTES","CML2_BAR_CODE","MATERIAL","OSOBENNOSTI_TKANI","SEZON","POL","STIL",""),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"PROP_SKU_MORE_PHOTO" => "MORE_PHOTO",
		"PROP_SKU_ARTICLE" => "CML2_ARTICLE",
		"PROPS_ATTRIBUTES" => array("RAZMER_PROIZVODITELYA","RAZMER_ROSSIYSKIY","CML2_BAR_CODE","CML2_ARTICLE","CML2_ATTRIBUTES","CML2_TRAITS","CML2_BASE_UNIT","CML2_TAXES","CML2_MANUFACTURER"),
		"PROPS_ATTRIBUTES_COLOR" => array(),
		"OFFERS_CART_PROPERTIES" => array("RAZMER_PROIZVODITELYA","RAZMER_ROSSIYSKIY","CML2_ARTICLE","CML2_BASE_UNIT","CML2_MANUFACTURER","CML2_TRAITS","CML2_TAXES","CML2_ATTRIBUTES","CML2_BAR_CODE"),
		"COMPARE_PATH" => ""
	)
);?>