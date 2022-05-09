<?php

function send_message($message)
{
  $config = require(__DIR__ . '/telegram_settings.php');
  $base_url    = "https://api.telegram.org/bot${config['bot_token']}/";
  $text = urlencode($message);
  $url = "${base_url}sendMessage?chat_id=${config['chat_id']}&text=${text}";

  file_get_contents($url);
}
