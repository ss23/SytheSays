<?php

/**
 * MyPDO class file
 */

/**
 * The MyPDO class.
 *
 * Provides a caching of prepared statements, along with a helper connect method
 */
class MyPDO extends PDO {
	/**
	 * Construct the class
	 */
	public function __construct() {
		$dns = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
		return parent::__construct($dns, DB_USER, DB_PASS);
	}

}

?>
