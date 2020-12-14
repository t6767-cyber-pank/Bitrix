<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$x=array();
global $USER;
echo $USER->GetID();
echo $USER->GetParam("ID");
echo $USER->GetParam("NAME");
$cur_user_id = $USER->GetID();
$rsUser = CUser::GetByID($cur_user_id);
$arUser = $rsUser->Fetch();
echo $arUser["UF_GAME"]; // Количество оставшихся игр
echo $arUser["UF_GAME_WIN"]; // Количество пройденных игр
echo $arUser["UF_VIDEO"]; // Количество просмотренных видео
echo $arUser["UF_LOSSE_GAME"]; // Количество проигранных игр
echo $arUser["UF_KAZGAME"]; // Количество пройденных игр на казахском
echo $arUser["UF_LOSSE_GAME_KZ"]; // Количество проигранных игр на казахском
echo $arUser["UF_OBSHEE_GAME"]; // Общее количество сыгранных игр


$fields = Array(
    "UF_GAME"=>"103"
);
$USER->Update($cur_user_id, $fields);
?>