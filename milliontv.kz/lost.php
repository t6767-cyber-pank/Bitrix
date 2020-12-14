<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$afterLostPage=new afterLostPage($_SESSION['langid']);
$APPLICATION->SetTitle($afterLostPage->titlePage);
global $USER;
$cur_user_id = $USER->GetID();
$rsUser = CUser::GetByID($cur_user_id);
$arUser = $rsUser->Fetch();
$sber=(int)$arUser["UF_SBER"];
$quantity_video = (int)$arUser["UF_VIDEO"];

if ($sber == 0 || $quantity_video<=3) {}
else if ($quantity_video>3) { header('Location: http:../end_game'); exit; }
?>

<div class="cell text-center" style="padding-top: 110px;  height: 90%;">
    <div class="col-12">
        <img src="bitrix/templates/kvm/img/logo2.png" alt="">
    </div>
    <div class="col-sm-12 col-lg-3" style="margin: auto;">
        <form class="form" action="#">
            <a href="../video.php"><button type="button" class="btn btn-primary btn-custom marg-top"><?=$afterLostPage->vidiopr ?></button></a>
<!--        <a href="../buy.php"><button type="button" class="btn btn-primary btn-custom">--><?//=$afterLostPage->buy5game ?><!--</button></a>-->
        </form>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>