<?php
interface Paypal {
	public function pay($amount);
}
class Net {
	public function __construct() {
		// This is the constructor
	}
	public function payMe() {
		echo "Certain amount was paid!";
	}
}
class NetAdapter implements Paypal 
{
	public function __construct(Net $obj) {
		$this->obj = $obj;
	}

	public function pay($amount) {
		$this->obj->payMe();
	}
}

$instance = new NetAdapter(new Net());
$instance->pay(12.99);