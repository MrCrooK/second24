<?
$IS_AJAX = false;
if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_REQUEST['AJAX_CALL']=='Y' )
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	$IS_AJAX = true;
} else {
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("Купить в 1 клик");
}
?> 

<?$APPLICATION->IncludeComponent("redsign:buy1click", "gopro", array(
	"ALFA_EMAIL_TO" => "",
	"SHOW_FIELDS" => array(
		0 => "RS_AUTHOR_NAME",
		1 => "RS_AUTHOR_PHONE",
	),
	"REQUIRED_FIELDS" => array(
		0 => "RS_AUTHOR_PHONE",
	),
	"ALFA_USE_CAPTCHA" => "Y",
	"ALFA_MESSAGE_AGREE" => "Ваша заявка принята! В ближайшее время с вами свяжется наш консультант.",
	"DATA" => "",
	"AJAX_MODE" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?if(!$IS_AJAX):?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
<?endif;?>