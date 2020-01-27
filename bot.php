<?php

define('TOKEN', '');
define('URL', 'https://api.telegram.org/bot'.TOKEN.'/');

$tmp = file_get_contents("php://input");
$bot = json_decode($tmp, true);
$chat = $bot["message"]["chat"]["id"];
$user_first_name = $bot["message"]["from"]["first_name"];
$user_last_name = $bot["message"]["from"]["last_name"];
$user = $user_last_name.' '.$user_first_name;
$text = $bot["message"]["text"];

if(trim($text) == 'hello bot') {
	$msg = 'Hello GOD: '.$text;
    send($chat, $msg);
} else {
	sendPhoto($chat, $msg);          
}



function send( $chat, $msg ){
    file_get_contents(URL."sendmessage?parse_mode=HTML&text=$msg&chat_id=$chat");
}
function sendPhoto( $chat, $msg ){ 
	$photo='https://images.wallpaperscraft.ru/image/lisa_spit_art_155409_1920x1080.jpg';
    file_get_contents(URL."sendphoto?chat_id=$chat&photo=$photo");
}