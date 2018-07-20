<?php
namespace db;

use interfaces\DbInterface;
use helpers\Version;

class User implements interfaces\DbInterface
{
	public function __construct() {
		echo 'Version Number: ' . Version::VERSION . "\n";
		echo 'Date Approved: ' . Version::DATE_APPROVED;
	}

	public function connect() {}
}