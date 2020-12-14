<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
if (isset($_SESSION['langid'])) $lang=$_SESSION['langid']; else $lang=1;
if (isset($_POST['lang'])) $lang=$_POST['lang'];
$indexPage=new indexPage($lang);
$_SESSION['langid']=$lang;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle($indexPage->titlePage);
?>
<div class="container h-100 main justify-content-center align-items-center" id="ajax">
        <div class="cell">
            <div class="col-lg-5 col-sm-12 lang ord">
                <div>
                    <p class="color-white"> <b style="color:white;"><?=$indexPage->chouseLang ?>:</b></p>
                    <select class="form-control select custon-select" id="chLan" onchange="changeLang(document.getElementById('chLan').value);">
                        <option <?php if($indexPage->langID==1) echo "selected"; ?> value="1"><img src="bitrix/templates/kvm/img/flag_rus.png" alt="">Русский</option>
                        <option <?php if($indexPage->langID==2) echo "selected"; ?> value="2"><img src="bitrix/templates/kvm/img/flag_kz.png" alt=""> Қазақ</option>
                    </select>
                    <form action="#">
                        <a class="continue" href="/auth.php"><button type="button" class="btn btn-primary btn-custom"><?=$indexPage->prodolgitBtn ?></button></a>
                    </form><!--../registratsiya.php-->
                </div>
            </div>

            <div class="col-lg-5 col-sm-12 ord ord-1">
                <div class="flex-box">
                    <p class="color-main"><?=$indexPage->uslovie ?></p>
                </div>
            </div>

        </div>
    <script>document.title = '<?=$indexPage->titlePage ?>'; </script>
    <?php $_SESSION['langid']=$indexPage->langID; ?>
</div>
<style>
    .navbar{
        display: none;
    }
</style>
<script>
    function changeLang(lang) {
        $.ajax({
            type:'POST',
            url:"index.php",
            data:{
                'lang': lang,
            },
            success:function(html){
                $("#ajax").html(html);
            },
            error:function(html){
                $('body').css('cursor','default');
                alert('Ошибка подключения!');
            },
        });
    }
</script>
<?php
if (isset($_POST['lang'])) exit;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
