<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заполнение профиля");
?><div class="container">
    <div class="cell text-center vertical-center">

        <div class="col-lg-8 col-sm-12">
            <img src="bitrix/templates/kvm/img/logo2.png" class="mobile-header" alt="">
            <h1 class="head-mobile">Заполните профиль</h1>
<p style="color: #725F90; font-size: 18px;" class="text-mobile">Чтобы сохранить пройденные игры — заполните профиль.</p>
        </div>
        <?$APPLICATION->IncludeComponent(
	"kvm:main.profile",
	"",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?>
        <!--<div class="col-lg-8 col-sm-12">
            <p style="color: #725F90; font-size: 18px;" class="text-mobile">Чтобы сохранить пройденные игры — заполните профиль.</p>
            <form class="register-form" action="#">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-sm-12">
                        <p class="inp-h">ФАМИЛИЯ:</p>
                        <input type="text" placeholder="Фамилия">
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <p class="inp-h">ИМЯ:</p>
                        <input type="text" placeholder="Имя">
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <p class="inp-h">E-MAIL:</p>
                        <input type="text" placeholder="E-mail">
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <p class="inp-h">ВОЗРАСТ:</p>
                        <input type="text" placeholder="Возраст">
                    </div>
                </div>
                <div >
                    <button type="button" class="btn btn-primary btn-custom" style="width: 248px; margin-top: 33px;">Сохранить</button>
                </div>
            </form>
        </div>-->
    </div>
</div>

<style>

.bx-auth-profile{
    width: 70%;
}

.foot-logo{
    bottom: 0px;
}

@media (max-width: 900px){
.foot-logo {
    position: relative !important;
    bottom: -80px !important;
}
}

.register-form input {
    padding: 14px;
}

.btn-custom {
    width: 100%;
    background: linear-gradient(180deg, #AD3F73 0%, #6B1983 100%), linear-gradient(180deg, #61BCE8 0%, #47A2CD 100%) !important;
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);
    border-radius: 4px !important;
    border: none !important;
    height: 48px !important;
    font-size: 16px !important;
    line-height: 21px !important;
    font-weight: 600 !important;
}

</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>