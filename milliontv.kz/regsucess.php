<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$l=(int)$_SESSION['langid'];
$regsucPage=new regsucPage($l);
$APPLICATION->SetTitle($regsucPage->titlePage);
?>

<?

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

<div class="container cuccess h-100">
    <div class="cell text-center vertical-center">
        <div class="col-12" style="margin-top: 50px;">
            <img class=".mobile-header" src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1 class="head-mobile"><?=$regsucPage->titlePage ?></h1>
        </div>
    <!-- <div class="col-lg-8 col-sm-12">
        <p class="first text-mobile"><?//=$regsucPage->opisReg ?></p>
    </div> -->
    <div class="col-lg-7 col-sm-12 back-money">
        <div class="row">
            <p class="second"><?=$regsucPage->proitiIgru; ?></p>
            <form class="register-form flex-box" action="#">
                <a href="../succ_auth.php"><button type="button" class="btn btn-primary btn-custom"><?=$regsucPage->proiti; ?></button></a>
                <!-- <a href="../buy.php"><button type="button" class="btn-2-custom btn-mobile-2"><?//=$regsucPage->poluchit; ?></button></a> -->
            </form>
        </div>
        
    </div>
</div>

<style>
    .navbar{
        display: none;
    }
</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>