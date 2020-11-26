<?php

require __DIR__. '/vendor/autoload.php';

use Notification\Email;

$novoEmail = new Email();
$novoEmail->sendEmail("Assunto de teste", "<h1>Esse é um <b>e-mail</b> de teste</h1>", "yuri.neves@quadritech.com.br", "Yuri", "yurineves92@gmail.com", "Yuri Neves");

var_dump($novoEmail);