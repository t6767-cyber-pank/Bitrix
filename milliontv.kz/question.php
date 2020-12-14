<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$lang=(int)$_SESSION['langid'];
$gameres=(int)$_SESSION['gameres'];
?>

<?
if(CModule::IncludeModule("iblock")){

	$end = 'end';
	$db_props = CIBlockElement::GetProperty($lang, $gameres, "sort", "asc", array());
    $button_answer_class = "";
    $MAS_LETTERS = ["","A)","B)","C)","D)"];
	$mass_ansver = [];
	$answer_question = 0;
	

    //Начало параметров вывода вопросов (Контроллеры вопросов)
	$end = $_POST['answer']; //Диапозон (10-первый вопрос, 16-второй вопрос, 22-вопрос номер три ... +6). Шаг через 6 элементов
    $start = 5; //Сколько элементов подать на вывод
    //Конец параметров вывода вопросов

    $noro = 0; //noro - number of response options (количество вариантов ответа)
    $i = 1;?>
			<div class="delete" data-number-quest="10">
			  <?while($ar_props = $db_props->fetch(PDO::FETCH_BOTH)){
					if(($start <= $end) && ($start >= $end - 5)){?>

						  <?if ($i % 6 == 0){
								$answer_question = $ar_props["VALUE"];
								?>
								<div class="hide" data-answer="<?=$answer_question?>"></div>
								<?
							}else{?>

							  <?if ($noro == 0) {?>
									<div class="container question col-lg-7 col-sm-12"> 
										<div class="question-vid"> 
											<p style="padding-top: 12px;">
												<?=$MAS_LETTERS[$noro];?>
												<? print_r($ar_props["VALUE"]);?>
											</p>
										</div>
									</div>

									<div class="container answer" style="margin-left: 53px;">
										<div class="row">
							  <?}else{?>
											<div class="col-lg-5 col-sm-12 no-padding btn-click" onclick="click_aswer(<?=$noro?>, <?=$end?>)" data-btn="<?=$noro ?>">
												<div class="answer-var">
													<p class="var-abcd">  <?=$MAS_LETTERS[$noro];?>         </p>
													<p class="text-abcd"> <? print_r($ar_props["VALUE"]);?> </p>
												</div>
											</div>
							  <?}?>
							  <?if ($noro == 4){
									$noro = 0;
									$button_answer_class = "";
								}else{
									$noro++;
									$button_answer_class = "button_answer";
								}
							}?>
					  <?$i++;
					}
					$start++;
				}?>
					</div>
				</div>
		</div>
      <?}?>