<?php
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$var=(int)$_SESSION['langid'];
switch ($_POST['operation'])
{
    case "lost":
        global $USER;
        $cur_user_id = $USER->GetID();
        $rsUser = CUser::GetByID($cur_user_id);
        $arUser = $rsUser->Fetch();
        if ($var==1) {
            $obshgames = (int)$arUser["UF_LOSSE_GAME"];
            $obshgames++;
            $fields = Array(
                "UF_LOSSE_GAME" => $obshgames
            );
        } else
        {
            $obshgames = (int)$arUser["UF_LOSSE_GAME_KZ"];
            $obshgames++;
            $fields = Array(
                "UF_LOSSE_GAME_KZ" => $obshgames
            );
        }
        $USER->Update($cur_user_id, $fields);
        break;
    case "win":
        global $USER;
        $cur_user_id = $USER->GetID();
        $rsUser = CUser::GetByID($cur_user_id);
        $arUser = $rsUser->Fetch();
        if ($var==1) {
            $obshgames = (int)$arUser["UF_GAME_WIN"];
            $obshgames++;
            $fields = Array(
                "UF_GAME_WIN" => $obshgames
            );
        } else
        {
            $obshgames = (int)$arUser["UF_KAZGAME"];
            $obshgames++;
            $fields = Array(
                "UF_KAZGAME" => $obshgames
            );
        }
        $USER->Update($cur_user_id, $fields);
        break;
    case "congrat":
        global $USER;
        $cur_user_id = $USER->GetID();
        $rsUser = CUser::GetByID($cur_user_id);
        $arUser = $rsUser->Fetch();
            $obshgames = (int)$arUser["UF_GAME"];
            $obshgames=$obshgames+3;
            $fields = Array(
                "UF_GAME" => $obshgames,
                "UF_SBER" => 1
            );
        $USER->Update($cur_user_id, $fields);
        break;
    case "video":
        global $USER;
        $cur_user_id = $USER->GetID();
        $rsUser = CUser::GetByID($cur_user_id);
        $arUser = $rsUser->Fetch();
            $obshgames = (int)$arUser["UF_VIDEO"];
            $obshgames++;
            $fields = Array(
                "UF_VIDEO" => $obshgames,
            );
        $USER->Update($cur_user_id, $fields);
        break;
}
?>