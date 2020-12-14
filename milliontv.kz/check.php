<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>

<div class="container">
    <div class="cell text-center vertical-center">
        <div class="col-sm-12 col-lg-3">
            <img src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1>Регистрация</h1>
        </div>
        <div class="col-sm-12 col-lg-3">
            <form class="register-form" action="#">
                <input id="phone" type="text" placeholder="+7(___) ___-__-__">
                <button type="button" class="btn btn-primary btn-custom">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>