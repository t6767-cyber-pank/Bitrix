<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
global $var;
$var=(int)$_SESSION['langid'];
if ($var==0) header('Location: http://milliontv.kz');
$authPage=new authPage($_SESSION['langid']);
$APPLICATION->SetTitle("авторизация");
?><?$APPLICATION->IncludeComponent(
	"kvm:main.auth.form",
	"",
	Array(
		"AUTH_FORGOT_PASSWORD_URL" => "",
		"AUTH_REGISTER_URL" => "",
		"AUTH_SUCCESS_URL" => ""
	)
);?><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>