<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавление в базу");
?>

<div class="container">
    <div class="cell text-center vertical-center">
        <div class="col-lg-8 col-sm-12">
            <img class="mobile-header margin-mobile" src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1 class="head-mobile" style="font-size: 40px; margin-top: 10px;">Вы добавлены в базу!</h1>
        </div>
        <div class="col-lg-8 col-sm-12">
            <p class="text-mobile" style="color: #725F90; font-size: 18px;">Теперь все игры сохраняются, можете продолжить играть.</p>
            <form class="register-form" action="#">
                <button type="button" class="btn btn-primary btn-custom" style="width: 248px; margin-top: 7px;">Начать игру</button>
            </form>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>