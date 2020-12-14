<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$l=(int)$_SESSION['langid'];
$enterPage=new enterPage($l);
$APPLICATION->SetTitle($enterPage->titlePage);
if ($USER->IsAuthorized()){
    header('Location: http://milliontv.kz/politiks.php');
};
$var=(int)$_SESSION['langid'];
if ($var==0) header('Location: http://milliontv.kz');
?>

<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */


/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */
?>

<?
   echo isUserPassword(CUser::GetByID($USER->GetID()), "wGT0hpCwfD");
?>


<?

function isUserPassword($userId, $password)
{
    $userData = CUser::GetByID($userId)->Fetch();

    $salt = substr($userData['PASSWORD'], 0, (strlen($userData['PASSWORD']) - 32));

    $realPassword = substr($userData['PASSWORD'], -32);
    $password = md5($salt.$password);

    return ($password == $realPassword);
}

?>

<div class="container">
    <div class="cell text-center vertical-center">
        <div class="col-sm-12 col-lg-3" style="margin-top: 50px;">
            <img src="bitrix/templates/kvm/img/logo2.png" alt="">
            <h1><?=$enterPage->titlePage ?></h1>
        </div>
        <div class="col-sm-12 col-lg-3">
            <form class="register-form" action="#">
                <input class="pass" style="display: none;" type="text" value="<?=$_SESSION['pass']?>">
                <input class="pass-check" type="text" placeholder="<?=$enterPage->vremPar ?>">
                <a class="check-pass"><button type="button" class="btn btn-primary btn-custom"><?=$enterPage->voiti ?></button></a>
            </form>
        </div>
    </div>
</div>
<style>
    .navbar{
        display: none;
    }
</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>