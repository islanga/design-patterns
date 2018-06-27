<?php
class DB
{
	private static $resource = false;

	private function __construct()
	{}

	public static function getInstance() 
	{
		if (false == self::$resource) 
		{
			self::$resource = new DB();
		}

		return self::$resource;
	}

	private function __clone()
	{}

	private function __wakeup()
	{}
}