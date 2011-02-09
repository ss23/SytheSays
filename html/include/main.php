<?php

define('PATH', realpath(__DIR__ . '/../../'));
require_once PATH . '/config.php';
require_once PATH . '/html/include/common.php';
require_once PATH . '/html/include/MyPDO.php';
require_once PATH . '/html/include/Template.php';

$GLOBALS['pdo'] = new MyPDO();
