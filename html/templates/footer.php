<?php
foreach ($this->getFootJS() as $File) {
	echo "\t\t<script type=\"text/javascript\" src=\"" . $this->e($File) . "\"></script>";
}
?>
</body>
</html>
