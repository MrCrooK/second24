<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Контакты");

?><div style="line-height:18px;">
<div>
Адрес: Свердловская область г. Новоуральск<br />
Телефон: 3437077777<br />
E-mail: sale@second24.ru<br />
График работы: Пн-Пт с 9:00 до 19:00<br /><br /><br />
<p><b>Схема проезда:</b></p><?
$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_WIDTH" => "750",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"ZOOM",1=>"SMALLZOOM",2=>"MINIMAP",3=>"TYPECONTROL",4=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_DRAGGING",),
		"MAP_ID" => "contacts"
	)
);
?></div>
</div><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>