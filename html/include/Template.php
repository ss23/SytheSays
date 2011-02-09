<?php

class Template {
	protected $headJS = array();
	protected $footJS = array();
	protected $title;
	protected $vars = array();

	public function e($text) {
		return htmlspecialchars($text, ENT_QUOTES);
	}

	public function p($name) {
		if (isset($this->vars[$name])) {
			return $this->e($this->vars[$name]);
		}
	}

	public function assign($name, $value) {
		$this->vars[$name] = $value;
	}

	public function display($file) {
		echo $this->fetch($file);
	}

	public function fetch($file) {
		ob_start();
		require PATH . '/html/templates/' . $file . '.php';
		return ob_get_clean();
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	protected function getTitle() {
		return $this->title;
	}

	public function addHeadJS($file, $name = null) {
		if (empty($name)) {
			$name = common_rand_str();
		}
		$this->headJS[$name] = $file;
	}

	public function addFootJS($file, $name = null) {
                if (empty($name)) {
                        $name = common_rand_str();
                }
                $this->footJS[$name] = $file;
	}

	protected function getHeadJS() {
		return array_values($this->headJS);
	}

	protected function getFootJS() {
		return array_values($this->footJS);
	}

}
