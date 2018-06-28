<?php
namespace db;

use helpers\Version;

class User 
{
	public function __construct() {
		echo 'Version Number: ' . Version::VERSION . "\n";
		echo 'Date Approved: ' . Version::DATE_APPROVED;
	}
}