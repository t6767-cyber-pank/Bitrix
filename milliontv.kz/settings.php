<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Настройка профиля игрока");
global $var;
$var=$_SESSION['langid'];
?>

    <?
        if (!$USER->IsAuthorized())
            header('Location: http://milliontv.kz/auth.php');
    ?>

    <div class="container setting">
        <div class="">
            <div class="col">

                <h1 style="padding-top: 84px; float: left;">Профиль</h1>

                <form class="profile" action="" style="padding-top: 101px; padding-left: 200px;">
                    <a href="../profile.php" class="settings"> <img src="../bitrix/templates/kvm/img/left.png" alt="" style="padding: 7px 7px 7px 0px;"> Профиль</a>
                    <a class="exit" href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array( "login", "logout", "register", "forgot_password", "change_password"));?>"><img src="../bitrix/templates/kvm/img/exit.png" alt=""></a>
                </form>

                <?$APPLICATION->IncludeComponent(
                    "kvm:main.profile.set",
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
    </div>

    <style>
        body{
            color: white;
        }

        select{
            background-color: #171125;
            color: white;
            border: none;
            border-radius: 4px;
            padding-left: 15px;
        }

        .btn .btn-custom{
            width: 100% !important;
            background: linear-gradient(180deg, #AD3F73 0%, #6B1983 100%), linear-gradient(180deg, #61BCE8 0%, #47A2CD 100%) !important;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05) !important;
            border-radius: 4px !important;
            border: none !important;
            height: 48px !important;
            font-size: 16px !important;
            line-height: 21px !important;
            font-weight: 600 !important;
            padding: 0px 83px !important;
        }

        .callend {
            right: 24px;
            top: 47px;
        }

        .foot-logo {
            bottom: -80px;
        }

        @media (max-width: 900px){
            .foot-logo {
                position: relative !important;
                bottom: -50px !important;
                display: flex;
                padding-bottom: 10px;
                margin-top: 0px;
            }

            .callend {
                position: relative;
                margin: -39px 0px 0px 216px;
                top: 0px;
                left: 0px;
            }

            .navbar-toggler.collapsed{
                position: fixed;
                top: 8px;
            }
        }

    </style>

    <?
    
    if (!CUser::IsAuthorized()) {
        ?><style>
            
            h1{
                visibility: hidden;
            }

            .profile{
                visibility: hidden;
            }

            tbody tr:nth-child(3){
                display: none;
            }

        </style><?
    }
    
    ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>