<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$mainGamePage=new mainGamePage($_SESSION['langid']);
$APPLICATION->SetTitle($mainGamePage->titlePage);
$var=(int)$_SESSION['langid'];
if ($var==0) header('Location: http://milliontv.kz');
if (!$USER->IsAuthorized()) header('Location: http://milliontv.kz/auth.php');
?>

    <div class="container h-100 main justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="main-img">
                    <img class="img-main-logos" src="bitrix/templates/kvm/img/logo2.png" alt="">
                </div>
                <h1 style="text-align: center;"><?=$mainGamePage->titlePage ?></h1>
                <a class="start-game" href="http://milliontv.kz/game.php"><?=$mainGamePage->newgame ?></a>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>