<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$gamePage=new gamePage($_SESSION['langid']);
global $var;
$var=(int)$_SESSION['langid'];
if ($var==0) header('Location: http://milliontv.kz');
if (!$USER->IsAuthorized()) header('Location: http://milliontv.kz/auth.php');
$APPLICATION->SetTitle($gamePage->titlePage);

// Начало блока выбора Собираем массив id инфоблока элементов
$numbers=array();
CModule::IncludeModule("iblock");
$arSelect = Array("ID", "IBLOCK_ID", "NAME");//IBLOCK_ID и ID обязательно должны быть указаны
$arFilter = Array("IBLOCK_ID"=> $var, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    array_push($numbers, $arFields['ID']);
}
$countStacks=count($numbers);
// конец блока выбора
/**
Поведения игры дать или не дать играть начало
**/
global $USER;
$cur_user_id = $USER->GetID();
$rsUser = CUser::GetByID($cur_user_id);
$arUser = $rsUser->Fetch();
$ugames=(int)$arUser["UF_GAME"];
$obshgames=(int)$arUser["UF_OBSHEE_GAME"];

switch ($var)
{
    case 1: $GAMEID=(int)$arUser["UF_GAMEIDRUS"]; $fieldID="UF_GAMEIDRUS"; break;
    case 2: $GAMEID=(int)$arUser["UF_GAMEIDKAZ"]; $fieldID="UF_GAMEIDKAZ"; break;
}

if ($ugames<1) { header('Location: http://milliontv.kz/lost.php'); exit; }
//echo "<div style='background: green'>Осталось игр".$arUser["UF_GAMEIDRUS"]."</div>";
//echo "<div style='background: green'>Осталось игр".$arUser["UF_GAMEIDKAZ"]."</div>";
//echo "<div style='background: green'>Осталось игр".$arUser["UF_GAME"]."</div>";
//echo "<div style='background: white'>Выиграно".$arUser["UF_GAME_WIN"]."</div>";
//echo "<div style='background: white'>ВыиграноKZ".$arUser["UF_KAZGAME"]."</div>";
//echo "<div style='background: white'>ОбщееКВИгр".$arUser["UF_OBSHEE_GAME"]."</div>";
//echo "<div style='background: white'>проигрRU".$arUser["UF_LOSSE_GAME"]."</div>";
//echo "<div style='background: white'>проигрKZ".$arUser["UF_LOSSE_GAME_KZ"]."</div>";
$ugames--;
$obshgames++;
$GAMEID++;
if ($GAMEID>$countStacks) $GAMEID=1;
global $rasklad;
$rasklad=$numbers[$GAMEID-1];
$_SESSION['gameres']=$rasklad;
$fields = Array(
    "UF_GAME"=>$ugames,
    "UF_OBSHEE_GAME"=>$obshgames,
    $fieldID=>$GAMEID
);
$USER->Update($cur_user_id, $fields);

?><div class="container game ">
	<div class="cell text-center vertical-center-custom">
		<div class="col-12" style="margin-bottom: 87px;">
 <img src="bitrix/templates/kvm/img/logo2.png" alt="">


<?

$APPLICATION->IncludeComponent(
	"kvm:news.list",
    "flat",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "-",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "13",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "0",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("QUESTION","FIRST_ANSWER","SECOND_ANSWER","THIRD_ANSWER","FORTH_ANSWER",""),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "yellow",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);
?>

        <div class="container help">
            <div class="row">
				<div class="col none-people"> <div class="help_people helps back-set">    </div> </div>
				<div class="col helps-show" style="display: none;"> <div class="helps-inactive back-set">    </div></div>

                <div class="col none"> <div class="fifty_fifty helps-1 back-set">  </div> </div>
				<div class="col helps-show-2" style="display: none;"> <div class="helps-1-inactive back-set" style="">  </div> </div>
				
                <div class="col none-friend"> <div class="help_friend helps-2 back-set">  </div> </div>
				<div class="col helps-show-3" style="display: none;"> <div class="helps-2-inactive back-set"  style="">  </div> </div>
            </div>
        </div>

		<div class="popup" id="popup1">
			<div class="popup-content">
				<div class="close">x</div>
				<p><?=$gamePage->pravotvet ?> <b class="result"></b></p>
			</div>
			<div class="pupup-contnt-graf">
				<div class="close">x</div>
				<div class="graf">
					<div class="grafics g_0"> </div>
					<div class="grafics g_1"> </div>
					<div class="grafics g_2"> </div>
					<div class="grafics g_3"> </div>

					<p class="procent">A)<b></b> </p>
					<p class="procent">B)<b></b> </p>
					<p class="procent">C)<b></b> </p>
					<p class="procent">D)<b></b> </p>
				</div>
			</div>
		</div>

        <div style="display: none;" class="exit-game">
            <h1 style="margin-bottom: 50px;">Вы правда хотите выйти из игры ?</h1>
            <a class="btn-yes" href="">Да</a>
            <a href="btn-no">Нет</a>
        </div>

	</div>
</div>
 <br>
    <script>
        var message="Правая кнопка мыши отключена!";
        function click(e) {
            if (document.all) {    // IE
                if (event.button == 2) {    // Чтобы отключить левую кнопку поставьте цифру 1
                    alert(message);    // чтобы отключить среднюю кнопку поставьте цифру 1
                    return false;}
            }
            if (document.layers) { // NC
                if (e.which == 3) {
                    alert(message);
                    return false;}
            }
        }
        if (document.layers)
        {document.captureEvents(Event.MOUSEDOWN);}
        document.onmousedown=click;
        document.oncontextmenu=function(e){return false};
    </script>
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="../bitrix/components/kvm/news.list/templates/flat/script_ajax.js"></script>
 
<style>

@media (max-width: 900px){
	.foot-logo {
		position: relative !important;
		bottom: -38px !important;
		display: flex;
		padding-bottom: 10px;
		margin-top: -30px;
	}
}

.foot-logo {
    bottom: 0px;
}

@media (min-width: 900px){
    .question-vid p{
        line-height: 15px !important;
        font-size: 17.5px !important;
        width: 35.8vw;
        padding: 0px 15px;
    }
}
 .navbar{
     display: none;
 }
</style>
    <script>document.title = '<?=$gamePage->titlePage ?>'; </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>