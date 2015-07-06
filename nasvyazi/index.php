<?$IS_AJAX = false;
if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_REQUEST['AJAX_CALL']=='Y' ){
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	$IS_AJAX = true;
}
else{
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("Мы всегда на связи");
}
echo '<link href="'.SITE_DIR.'nasvyazi/style.css?'.randString(10,array('1234567890')).'" type="text/css" rel="stylesheet" />';
?><div class="nasvyazi">
<p>
<a href="/about/f-a-q.php">Посетить центр поддержки</a>
</p>
<br>
<p>
<a href="#">Задать вопрос специалисту</a>
</p>
<br>
<p>
Написать нам<br>
<a href="mailto:help@second24.ru">help@second24.ru</a><br>
</p>
</div>
<?if(!$IS_AJAX):?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
<?endif;?>