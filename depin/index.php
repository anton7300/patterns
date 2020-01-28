<?php

require 'DI.php';
require 'Test.php';
require 'Init.php';

// создаю объект ди
$di = new DI();

// подключа конфиги к и добавляю к ди
$config = require 'config.php';
$di->set('config', $config);

// создаю объект тест и добавляю в ди объект тест
$test = new Test($di);
$di->set('test', $test);

// создаю объект инит и вызываю метод инит гет
$init = new Init($di);
$init->get();
