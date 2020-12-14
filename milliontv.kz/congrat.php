<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$congratPage=new congratPage($_SESSION['langid']);
$APPLICATION->SetTitle($congratPage->titlePage);
?>

<div class="container" style="height: 90%;">
    <div class="cell text-center vertical-center" style="padding-top: 60px; min-height: 0vh;"> 
        <div class="col-12">
            <img src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1><?=$congratPage->titlePage ?></h1>
        </div>
        <div class="row col-sm-12 col-lg-3 justify-content-center" style="margin-top: 27px;">
            <p class="text-game-2"><?=$congratPage->str1 ?>&nbsp;</p>
            <p class="text-game">+</p>
            <div class="game-for-player">3</div>
            <p class="text-game-2"><?=$congratPage->str2 ?></p>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="row inform">
                <img src="bitrix/templates/kvm/img/credit_card.png" alt="" style="height: 14px; margin: auto; margin-left: 27px;">
                <p style="width: 230px !important;"><?=$congratPage->kartinfo ?></p>
            </div>
        </div>
        <div class="col-lg-3">
            <form class="register-form" action="#">
                <a href="http://milliontv.kz/succ_auth.php"><button type="button" class="btn btn-primary btn-custom"><?=$congratPage->gameback ?></button></a>
            </form>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>