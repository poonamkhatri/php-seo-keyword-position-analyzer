<?php
if (version_compare(PHP_VERSION, '7.4.0') >= 0) {
	//Rest client for PHP 7.4 - 8.0
	include_once('RestClient_php_74_upper.php');
} else {
	//Rest client for PHP 6-7.3
	include_once('RestClient_php_74_lower.php');
}
