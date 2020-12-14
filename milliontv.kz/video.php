<?
require($_SERVER["DOCUMENT_ROOT"]."/TM_translations.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$watchVideo=new watchVideo($_SESSION['langid']);
$APPLICATION->SetTitle($watchVideo->titlePage);
?>

<?
    if (!$USER->IsAuthorized())
        header('Location: http://milliontv.kz/auth.php');

    global $USER;
    $cur_user_id = $USER->GetID();
    $rsUser = CUser::GetByID($cur_user_id);
    $arUser = $rsUser->Fetch();
    $quantity_video = (int)$arUser["UF_VIDEO"];
?>

<?=$rsUser->arResult["UF_VIDEO"];?>

<?
    $mass=["<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6YYxgfqfb2k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>",
           "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/CQ-tCeAQQv4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>",
           "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tJv4Rzp1Asc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"
        ]
?>
<style>
    .hidden{
        display:none;
    }
    #playBtn {
        border: solid 1px #333;
        padding: 5px;
        cursor: pointer;
        background: white;
    }

    #playBtn2 {
        border: solid 1px #333;
        padding: 5px;
        cursor: pointer;
        background: white;
    }

    #playBtn3 {
        border: solid 1px #333;
        padding: 5px;
        cursor: pointer;
        background: white;
    }

</style>
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
<?
    if ($quantity_video > 3){
        header("Location:../video_end");
    }
?>
    <div class="container">
        <div class="cell video text-center vertical-center">
            <div class="col-sm-12 col-lg-12" style="margin-top: 5%;">
                <div style="background: #0A1F3F; color: white; visibility: hidden;">
                    <input type="radio" id="contactChoice1"
                           name="contact" <?if ($quantity_video == 1) { echo "checked";} ?> value="1" onclick="visibleVideo()">
                    <label for="contactChoice1" style="margin-right: 20px"><?=$watchVideo->v1 ?></label>

                    <input type="radio" id="contactChoice2"
                           name="contact" <?if ($quantity_video == 2) { echo "checked";} ?> value="2"  onclick="visibleVideo()">
                    <label for="contactChoice2" style="margin-right: 20px"><?=$watchVideo->v2 ?></label>

                    <input type="radio" id="contactChoice3"
                           name="contact" <?if ($quantity_video == 3) { echo "checked";} ?> value="3"  onclick="visibleVideo()">
                    <label for="contactChoice3"><?=$watchVideo->v3 ?></label>
                </div>
                <div id="div1">
                <video width="600" height="400">
                    <source src="videoplayback.mp4" type="video/mp4">
                </video>
                <div id="controls" class="hidden">
                    <a id="playBtn"><?=$watchVideo->smotrvid ?></a>
                    <span id="timer" style="display: none;">00:00</span>
                    <input type="range" step="0.1" min="0" max="1" value="1" id="volume" style="display: none;" />
                </div>
                </div>
                <div id="div2">
                <video width="600" height="400">
                    <source src="Sberbank_Pay.mp4" type="video/mp4">
                </video>
                <div id="controls2" class="hidden">
                    <a id="playBtn2"><?=$watchVideo->smotrvid ?></a>
                    <span id="timer2" style="display: none;">00:00</span>
                    <input type="range" step="0.1" min="0" max="1" value="1" id="volume2" style="display: none;" />
                </div>
                </div>
                <div id="div3">
                <video width="600" height="400">
                    <source src="Visa_ALL_IN_от_Сбербанк_Казахстан.mp4" type="video/mp4">
                </video>
                <div id="controls3" class="hidden"">
                    <a id="playBtn3"><?=$watchVideo->smotrvid ?></a>
                    <span id="timer3" style="display: none;">00:00</span>
                    <input type="range" step="0.1" min="0" max="1" value="1" id="volume3" style="display: none;" />
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3">
            </div>
        </div>
    </div>

    <style>
        @media (max-width: 900px) {
            video {
                width: 100%;
            }
        }
    </style>

<script>
    // получаем все элементы
    var videoEl = document.getElementsByTagName('video')[0],
        playBtn = document.getElementById('playBtn'),
        vidControls = document.getElementById('controls'),
        volumeControl = document.getElementById('volume'),
        timePicker = document.getElementById('timer');

    var videoEl2 = document.getElementsByTagName('video')[1],
        playBtn2 = document.getElementById('playBtn2'),
        vidControls2 = document.getElementById('controls2'),
        volumeControl2 = document.getElementById('volume2'),
        timePicker2 = document.getElementById('timer2');

    var videoEl3 = document.getElementsByTagName('video')[2],
        playBtn3 = document.getElementById('playBtn3'),
        vidControls3 = document.getElementById('controls3'),
        volumeControl3 = document.getElementById('volume3'),
        timePicker3 = document.getElementById('timer3');

    videoEl.addEventListener('canplaythrough', function () { vidControls.classList.remove('hidden'); videoEl.volume = volumeControl.value; }, false);
    playBtn.addEventListener('click', function () {if (videoEl.paused) { videoEl.play();}}, false);
    videoEl.addEventListener('play', function () {  document.getElementById("contactChoice1").disabled = true; document.getElementById("contactChoice2").disabled = true; document.getElementById("contactChoice3").disabled = true; playBtn.innerText = "<?=$watchVideo->smotrdokonca ?>";}, false);
    videoEl.addEventListener('pause', function () { playBtn.innerText = "<?=$watchVideo->smotrvid ?>"; }, false);
    volumeControl.addEventListener('input', function () { videoEl.volume = volumeControl.value; }, false);
    videoEl.addEventListener('ended', function () { videoEl.currentTime = 0; document.getElementById("contactChoice1").disabled = false; document.getElementById("contactChoice2").disabled = false; document.getElementById("contactChoice3").disabled = false; ttt(); video_look(); $(location).attr('href',"../congrat_video");}, false);
    videoEl.addEventListener('timeupdate', function () { timePicker.innerHTML = secondsToTime(videoEl.currentTime); }, false);

    videoEl2.addEventListener('canplaythrough', function () { vidControls2.classList.remove('hidden'); videoEl2.volume = volumeControl2.value; }, false);
    playBtn2.addEventListener('click', function () {if (videoEl2.paused) { videoEl2.play();}}, false);
    videoEl2.addEventListener('play', function () {document.getElementById("contactChoice1").disabled = true; document.getElementById("contactChoice2").disabled = true; document.getElementById("contactChoice3").disabled = true; playBtn.innerText = "<?=$watchVideo->smotrdokonca ?>";}, false);
    videoEl2.addEventListener('pause', function () { playBtn2.innerText = "<?=$watchVideo->smotrvid ?>"; }, false);
    volumeControl2.addEventListener('input', function () { videoEl2.volume = volumeControl2.value; }, false);
    videoEl2.addEventListener('ended', function () { videoEl2.currentTime = 0; document.getElementById("contactChoice1").disabled = false; document.getElementById("contactChoice2").disabled = false; document.getElementById("contactChoice3").disabled = false;  ttt(); video_look(); $(location).attr('href',"../congrat_video");}, false);
    videoEl2.addEventListener('timeupdate', function () { timePicker2.innerHTML = secondsToTime(videoEl2.currentTime); }, false);

    videoEl3.addEventListener('canplaythrough', function () { vidControls3.classList.remove('hidden'); videoEl3.volume = volumeControl3.value; }, false);
    playBtn3.addEventListener('click', function () {if (videoEl3.paused) { videoEl3.play();}}, false);
    videoEl3.addEventListener('play', function () { document.getElementById("contactChoice1").disabled = true; document.getElementById("contactChoice2").disabled = true; document.getElementById("contactChoice3").disabled = true; playBtn.innerText = "<?=$watchVideo->smotrdokonca ?>"; }, false);
    videoEl3.addEventListener('pause', function () { playBtn3.innerText = "<?=$watchVideo->smotrvid ?>"; }, false);
    volumeControl3.addEventListener('input', function () { videoEl3.volume = volumeControl3.value; }, false);
    videoEl3.addEventListener('ended', function () { videoEl3.currentTime = 0; document.getElementById("contactChoice1").disabled = false; document.getElementById("contactChoice2").disabled = false; document.getElementById("contactChoice3").disabled = false; ttt(); video_look(); $(location).attr('href',"../congrat_video");}, false);
    videoEl3.addEventListener('timeupdate', function () { timePicker3.innerHTML = secondsToTime(videoEl3.currentTime); }, false);

    // рассчет отображаемого времени
    function secondsToTime(time){

        var h = Math.floor(time / (60 * 60)),
            dm = time % (60 * 60),
            m = Math.floor(dm / 60),
            ds = dm % 60,
            s = Math.ceil(ds);
        if (s === 60) {
            s = 0;
            m = m + 1;
        }
        if (s < 10) {
            s = '0' + s;
        }
        if (m === 60) {
            m = 0;
            h = h + 1;
        }
        if (m < 10) {
            m = '0' + m;
        }
        if (h === 0) {
            fulltime = m + ':' + s;
        } else {
            fulltime = h + ':' + m + ':' + s;
        }
        return fulltime;
    }


    visibleVideo();
    function visibleVideo() {
        if (document.getElementById("contactChoice1").checked==true) { document.getElementById("div1").style.display="block"; document.getElementById("div2").style.display="none"; document.getElementById("div3").style.display="none"; }
        if (document.getElementById("contactChoice2").checked==true) { document.getElementById("div1").style.display="none"; document.getElementById("div2").style.display="block"; document.getElementById("div3").style.display="none"; }
        if (document.getElementById("contactChoice3").checked==true) { document.getElementById("div1").style.display="none"; document.getElementById("div2").style.display="none"; document.getElementById("div3").style.display="block"; }
    }

    function ttt() {
        $.ajax({
            type: 'POST',
            url: 'http://milliontv.kz/ajaxoperations.php',
            data: {
                'operation': 'congrat'
            },
            timeout: 20000,
            success: function (html) {
                //$(location).attr('href', "http://milliontv.kz/congrat.php");
            },
            error: function (html) {
                $('body').css('cursor', 'default');
                alert('Ошибка подключения!');
            },
        });
    }

    function video_look(){
        $.ajax({
            type: 'POST',
            url: 'http://milliontv.kz/ajaxoperations.php',
            data: {
                'operation': 'video'
            },
            timeout: 20000,
            success: function (html) {
                //$(location).attr('href', "http://milliontv.kz/congrat.php");
            },
            error: function (html) {
                $('body').css('cursor', 'default');
                alert('Ошибка подключения!');
            },
        });
    }
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
