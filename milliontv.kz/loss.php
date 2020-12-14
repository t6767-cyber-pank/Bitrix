<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$lossPage=new lossPage($_SESSION['langid']);
$APPLICATION->SetTitle($lossPage->titlePage);
?>

<div class="container" style="height: 90%;">
    <div class="cell text-center vertical-center" style="min-height: 0; padding-top: 120px;">
        <div class="col-sm-12 col-lg-8" >
            <img src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1 class="head-mobile"><?=$lossPage->lostmess ?></h1>
        </div>
        <div class="col-sm-12 col-lg-4">
            <p class="text-mobile" style="color: #725F90; font-size: 18px;"><?=$lossPage->priobresti ?></p>
            <form class="register-form" action="#">
                <a href="../succ_auth.php"><button type="button" class="btn btn-primary btn-custom" style="width: 248px;"><?=$lossPage->dalee ?></button></a>
            </form>
        </div>
    </div>
</div>

<style>

@media (min-width: 900px){
    .foot-logo {
        position: relative;
        bottom: 0px;
    }
}

</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>