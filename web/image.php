<?php
require __DIR__ . '/../vendor/autoload.php';
use Gregwar\Captcha\CaptchaBuilder;

session_start();
$builder = new CaptchaBuilder;
$builder->build();
if (isset($_GET['type']) && $_GET['type'] === 'message') {
    $_SESSION['message_phrase'] = $builder->getPhrase();
} else {
    $_SESSION['phrase'] = $builder->getPhrase();
}

header('Content-type: image/jpeg');
$builder->output();
