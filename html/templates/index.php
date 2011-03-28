<?php $this->display('header'); ?>

<?php
if (!empty($this->vars['quotes']) && is_array($this->vars['quotes'])) {
	foreach ($this->vars['quotes'] as $quote) {
		$this->e(print_r($quote));
	}
} else { ?>
No quotes found
<?php } ?>


Foo!
<?php $this->display('footer'); ?>
