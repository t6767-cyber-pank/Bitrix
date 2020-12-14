<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$profilePage=new profilePage($_SESSION['langid']);
$APPLICATION->SetTitle($profilePage->titlePage);
global $var;
$var=$_SESSION['langid'];
?>

<?
    if (!$USER->IsAuthorized())
        header('Location: http://milliontv.kz/auth.php');
?>

<div class="container">
    <div class="profile">

        <?$APPLICATION->IncludeComponent(
            "kvm:main.profile.look",
            "",
            Array(
                "CHECK_RIGHTS" => "N",
                "SEND_INFO" => "N",
                "SET_TITLE" => "Y",
                "USER_PROPERTY" => array(),
                "USER_PROPERTY_NAME" => ""
            )
        );?>

    </div>
</div>

<style>

    .bx-auth{
        padding: 180px 0px 0px 0px;
        margin: auto;
        color: white;
    }

    .foot-logo {
        bottom: -100px;
    }

    @media (max-width: 900px){
        .foot-logo {
            bottom: -40px !important;
        }
    }

    .bx-authform {
        margin: 0 0 25px;
        max-width: 329px !important;
        margin: auto;
        padding-top: 8vw;
        color: white;
    }

    .bx-authform-input-container input[type="text"], .bx-authform-input-container input[type="password"] {
        width: 100% !important;
        margin-bottom: 0px !important;
        background: #171023 !important;
        margin-top: 5px !important;
        opacity: 0.7;
        border-radius: 4px !important;
        border: none !important;
        height: 45px !important;
        color: white;
        padding: 17px !important;
    }

    .bx-authform-content-container, .bx-authform-label-container {
        padding-bottom: 2px;
        margin-bottom: 2px;
        font-size: 15px;
        color: #b3b3b3;
    }

    .bx-authform-link-container {
        margin-bottom: 0px;
        color: white;
        font-size: 0px;
        margin-left: 19px;
        float: left;
    }

    .bx-authform-link-container a{
        font-size: 13px !important;
    }

    .bx-title{
        font-size: 40px;
        text-align: center;
    }

    .foot-logo {
        position: absolute !important;
        width: 100% !important;
        bottom: 15px !important;
        left: 0px;
    }

    .foot-logo img{
        margin: auto;
        display: block;
    }

</style>
    <script>document.title = '<?=$profilePage->titlePage ?>'; </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>