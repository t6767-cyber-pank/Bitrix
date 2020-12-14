<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Забыл пароль");
?><?$APPLICATION->IncludeComponent(
	"kvm:main.auth.forgotpasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "../auth.php",
		"AUTH_REGISTER_URL" => "../registraciya.php"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>