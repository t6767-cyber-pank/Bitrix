<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$buyPage=new buyPage($_SESSION['langid']);
$APPLICATION->SetTitle($buyPage->titlePage);
?>
<div class="container" style="height: 90%;">
    <div class="cell text-center">
        <div class="col-12" style="padding-top: 25vh; font-weight: 300;">
            <h1><?=$buyPage->buy5game ?></h1>
        </div>
        <div class="col-12">
            <p style="color: #725F90; font-size: 18px;"><?=$buyPage->stoy1 ?> <b style="font-size: 18px; line-height: normal; color: #E04290;"><?=$buyPage->stoy2 ?>.</b></p>
            <form class="register-form" action="#">
                <button type="button" class="btn btn-primary btn-custom" style="width: 248px; margin-top: 11px;"><?=$buyPage->karta ?></button>
            </form>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>