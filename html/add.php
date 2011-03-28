<?php

require_once 'include/main.php';

$Template = new Template();
$Template->setTitle('Add a quote - Sythe Says the Darndest Things!');

if (!empty($_POST)) {
	// Validate that form!
	if (empty($_POST['name']) || !preg_match('/[a-zA-Z0-9 ]{,60}/', $_POST['name'])) {
		$errors[] = 'name';
	}

	if (empty($_POST['quote']) || !preg_match('/.{10,100000}/', $_POST['quote'])) {
		$errors[] = 'quote';
	}

	if (!empty($_POST['where'])) {
		if (!preg_match('/.{,60}/', $_POST['where'])) {
			$errors[] = 'where';
		}
        } else {
		$_POST['where'] = '';
	}

        if (!empty($_POST['comment'])) {
                if (!preg_match('/.{,1000}/', $_POST['comment'])) {
                        $errors[] = 'comment';
                }
        } else {
		$_POST['comment'] = '';
	}

	if (!empty($errors)) {
		$Template->assign('errors', $errors);
	} else {
		// Add it
		$stmt = $GLOBALS['pdo']->prepare('insert into `Quotes` set
							`Uploader` = :uploader,
							`When` = FROM_UNIXTIME(:when),
							`Quote` = :quote,
							`Where` = :where,
							`Comment` = :comment');
		$stmt->bindValue(':uploader', $_POST['name']);
		$stmt->bindValue(':when', time());
		$stmt->bindValue(':quote', $_POST['quote']);
		$stmt->bindValue(':where', $_POST['where']);
		$stmt->bindValue(':comment', $_POST['comment']);
		$stmt->execute();

		$Template->assing('id', $GLOBALS['pdo']->lastInsertId());
		$Template->display('add_complete');
		die();
	}
}

$Template->display('add');
