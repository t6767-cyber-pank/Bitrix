<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$FAQPage=new FAQPage($_SESSION['langid']);
$APPLICATION->SetTitle($FAQPage->titlePage);
?>
    <style>
        ..btn-link {
            width: 100% !important;
            padding-right: 0px !important;
        }
    </style>
    <div class="container setting">
	<div>
		<div class="col">
			<h1 style="padding-top: 84px; float: left;"><?=$FAQPage->titlePage ?></h1>
		</div>
		<div class="col p-t" style="padding-top: 166px;">
			 <?$APPLICATION->IncludeComponent(
	"kvm:news.list.faq",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_NOTES" => "",
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
		"FIELD_CODE" => array("PREVIEW_TEXT",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $FAQPage->component,
		"IBLOCK_TYPE" => "faq",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "0",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("","QUESTION",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <!--<div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne">
                                Как стать зрителем шоу?
                            </button>
                        <img class="vector" src="bitrix/templates/kvm/img/Vector.png" alt="">
                        </h5>
                    </div>
                    <div id="collapseOne5" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            В конце съемок каждого шоу проходит розыгрыш призов среди зрителей в студии! Каждую неделю розыгрыш туристической путевки на двоих для телезрителей шоу! Для того чтобы стать зрителем игры в студии и получить уникальную возможность принять участие в подсказке «Помощь зала» необходимо позвонить по телефону. ххх-ххх. Оператор предложит Вам даты и время ближайших съёмок. Если дата и время Вас устроит, оператор объяснит Вам, как действовать дальше.
                        </div>
                    </div>
                </div>-->
		</div>
	</div>
</div>

<style>
.foot-logo {
	position: initial !important;
    display: flex;
    left: 0vw !important;
    margin-left: 0px !important;
    width: 100%;
    margin-top: -50px;
    bottom: 20px !important;
}

body{
	background-color: #0f1841;
}
</style>

    <script>document.title = '<?=$FAQPage->titlePage ?>'; </script>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>