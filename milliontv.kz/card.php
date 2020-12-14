<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$cartOformPage=new cartOformPage($_SESSION['langid']);
$APPLICATION->SetTitle($cartOformPage->titlePage);
global $USER;
$cur_user_id = $USER->GetID();
$rsUser = CUser::GetByID($cur_user_id);
$arUser = $rsUser->Fetch();
$sber=(int)$arUser["UF_SBER"];
if ($sber>0) { header('Location: http://milliontv.kz/lost.php'); exit; }
?><div class="cell text-center" style="padding-top: 10vh; height: 93%;">
        <div class="col-12">
            <img src="bitrix/templates/kvm/img/card.png" alt="">
            <h1><?=$cartOformPage->kartOform ?></h1>
        </div>
        <div class="col-sm-12 col-lg-3" style="margin: auto;">
            <p style="color: #64D665;"><?=$cartOformPage->kartOpis ?></p>
            <!--<form class="form" action="#">-->
            <!--<a class="buy-cart" href="https://www.sberbank.kz/ru/visa_allin">-->
            <button type="button" onclick="ttt()" class="btn btn-primary btn-custom btn-3-custom" style="width: 100%; height: 100%; padding: 15px 14px 15px 14px;"><?=$cartOformPage->blizotdel ?></button>
            <!--</a>-->
            <!--</form>-->
</div>
</div>
<script>
function ttt() {
$.ajax({
    type: 'POST',
    url: 'http://milliontv.kz/ajaxoperations.php',
    data: {
        'operation': 'congrat'
    },
    timeout: 20000,
    success: function (html) {
        window.open('https://www.sberbank.kz/ru/visa_allin', '_blank');
        $(location).attr('href', "http://milliontv.kz/congrat.php");
    },
    error: function (html) {
        $('body').css('cursor', 'default');
        alert('Ошибка подключения!');
    },
});
}
</script>
<style>
body{
background-image: url(bitrix/templates/kvm/img/back-2.png);
}

.foot-logo {
bottom: 0px;
}
</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>