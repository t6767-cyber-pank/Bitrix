<?
global $var1;
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$l=(int)$_SESSION['langid'];
$var1=$l;
$registrPage=new registrPage($l);
$APPLICATION->SetTitle($registrPage->titlePage);
?><div class="container h-100">
	<div class="cell text-center vertical-center h-100">
		<div class="col-sm-12 col-lg-3" style="margin-top: 50px;">
            <img src="bitrix/templates/kvm/img/logo2.png" alt="">
			<h1><?=$registrPage->titlePage ?></h1>
		</div>
		<div class="col-sm-12 col-lg-3">
			<div class="cell text-center">
                <?
      /*           $APPLICATION->IncludeComponent(
	"kvm:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(),
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "../Enter.php",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"VARIABLE_ALIASES" => Array()
	)
); */
                 ?>
                <a style="display: none;" class="enter button" href="/Enter.php"><button type="button" class="btn btn-primary btn-custom"><?=$registrPage->titlePage ?></button></a>
                <?$APPLICATION->IncludeComponent(
                    "kvm:main.register.new",
                    "",
                    Array(
                        "AUTH" => "Y",
                        "REQUIRED_FIELDS" => array(),
                        "SEF_FOLDER" => "/",
                        "SEF_MODE" => "Y",
                        "SET_TITLE" => "Y",
                        "SHOW_FIELDS" => array(),
                        "SUCCESS_PAGE" => "../regsucess.php",
                        "USER_PROPERTY" => array(),
                        "USER_PROPERTY_NAME" => "",
                        "USE_BACKURL" => "Y",
                        "VARIABLE_ALIASES" => Array()
                    )
                );?>
            </div>
		</div>
	</div>
</div>

    <script>document.title = '<?=$registrPage->titlePage ?>'; </script>
	 <style>

    .navbar{
        display: none;
    }

    @media (max-width: 900px){
        .foot-logo {
            position: fixed !important;
            bottom: none;
            top: 700px;
            display: flex;
            padding-bottom: 10px;
            margin-top: -30px;
        }
    }

</style>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>