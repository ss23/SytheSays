<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->e($this->getTitle()); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<?php foreach ($this->getHeadJS() as $File) {
		echo "\t\t<script type=\"text/javascript\" src=\"" . $this->e($File) . "\"></script>";
	} ?>
</head>
