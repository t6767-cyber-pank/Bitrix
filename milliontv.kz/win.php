<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$winPage=new winPage($_SESSION['langid']);
$APPLICATION->SetTitle($winPage->titlePage);
?>

<div class="container" style="height: 93%;">
    <div class="cell text-center vertical-center" style="padding-top: 60px; min-height: 0;">
        <div class="col-lg-8 col-sm-12">
            <img src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1 class="head-mobile"><?=$winPage->pozdr ?></h1>
        </div>
        <div class="col-lg-7 col-sm-12">
            <p class="text-mobile" style="color: #725F90; font-size: 18px;"><?=$winPage->pozdrmess ?></p>
            <form class="register-form" action="#">
                <a href="/succ_auth.php"> <button type="button" class="btn btn-primary btn-custom" style="width: 248px;"><?=$winPage->dalee ?></button></a>
            </form>
        </div>
    </div>
</div>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>