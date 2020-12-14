<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$l=(int)$_SESSION['langid'];
$politicsPage=new politicsPage($l);
$APPLICATION->SetTitle($politicsPage->titlePage);
$var=(int)$_SESSION['langid'];
if ($var==0) header('Location: http://milliontv.kz');

/** Заполняем поля пользователя **/
global $USER;
$cur_user_id = $USER->GetID();
$rsUser = CUser::GetByID($cur_user_id);
$arUser = $rsUser->Fetch();
$fields = Array(
    "UF_GAME"=>"2",
    "UF_GAME_WIN"=>"0",
    "UF_VIDEO"=>"1",
    "UF_LOSSE_GAME"=>"0",
    "UF_KAZGAME"=>"0",
    "UF_LOSSE_GAME_KZ"=>"0",
    "UF_SBER"=>"0",
    "UF_GAMEIDKAZ"=>"1",
    "UF_GAMEIDRUS"=>"1",
    "UF_OBSHEE_GAME"=>"0"
);
$USER->Update($cur_user_id, $fields);

?>

<div class="container h-100">
    <div class="cell text-center vertical-center pol" style="min-height: 90vh;">
        <div class="col-12">
                <img src="bitrix/templates/kvm/img/logo2.png" alt="">
                <h1><?=$politicsPage->titlePage ?></h1>
        </div>
    <div class="col-sm-12 col-lg-9">
        <div id="boxscroll" class="skroll-bar">
            <p><?=$politicsPage->opis ?></p>
        </div>
    </div>
    <div class="col-sm-12 col-lg-3">
        <form class="register-form" action="#">
            <a href="/regsucess.php"><button type="button" class="btn btn-primary btn-custom"><?=$politicsPage->soglas ?></button></a>
        </form>
    </div>
</div>

    <style>
        .navbar{
            display: none;
        }

        .skroll-bar{
            margin-bottom: 20px;
        }

    </style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>