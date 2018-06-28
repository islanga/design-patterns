<?php
/*
 * Date: 2018/06/27 17:20
 * Name: Innocent Langa
 * Singleton class
 */
final class Product
{
	/*
	 * @var self
	 */
	private static $instance;

	/*
	 * @var mixed
	 */
	public $mix;

	/*
	 * Return self instance
	 *
	 * @return self
	 */
	public static function getInstance() {
		if (!(self::$instance instanceof self)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct() {}

	private function __clone() {}
}

// Run
$firstProduct       = Product::getInstance();
$secondProduct      = Product::getInstance();

$firstProduct->mix  = 'test';
$secondProduct->mix = 'example';

print_r(
	$firstProduct->mix
);

print_r(
	$secondProduct->mix
);