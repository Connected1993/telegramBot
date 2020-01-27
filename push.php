<?
define('TOKEN', '');
define('URL', 'https://api.telegram.org/bot'.TOKEN.'/');
$chat = 223054377;
$msg = 'Test PUSH !!!';
file_get_contents(URL."sendmessage?parse_mode=HTML&text=$msg&chat_id=$chat");
