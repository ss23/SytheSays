<?php

require_once 'include/main.php';

$Template = new Template();
$Template->setTitle('Home - Sythe Says the Darndest Things!');

$stmt = $GLOBALS['pdo']->prepare('select * from `Quotes` LIMIT 20');
$stmt->execute();

$Template->assign('quotes', $stmt->fetchAll(PDO::FETCH_ASSOC));
$Template->display('index');
