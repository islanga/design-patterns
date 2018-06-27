<?php
/*
 * Date: 2018/06/27 17:00
 * Name: Innocent Langa
 */
// Simple Interface for each Adapter we create
interface paymentAdapter
{
	public function pay($amount);
}

// Concrete Implementation of PayPal Class
class PayPal
{
	public function __construct() {
		// Your Code Here //
	}
	public function sendPayment($amount) {
		// Paying via Paypal //
		echo "Paying via PayPal: " . $amount;
	}
}

class paypalAdapter implements paymentAdapter
{
	private $paypal;

	public function __construct(PayPal $paypal) {
		$this->paypal = $paypal;
	}
	public function pay($amount) {
		$this->paypal->sendPayment($amount);
	}
}
$paypal = new paypalAdapter( new PayPal() );
$paypal->pay('2629');

// Concrete Implementation of MoneyBooker Class
class MoneyBooker
{
	public function __construct() {
		// Your Code Here //
	}
	public function doPayment($amount) {
		// Paying via MoneyBooker //
		echo "Paying via MoneyBooker: " . $amount;
	}
}

// MoneyBooker Adapter
class moneybookerAdapter implements paymentAdapter
{
	private $moneybooker;
	public function __construct(MoneyBooker $moneybooker) {
		$this->moneybooker = $moneybooker;
	}
	public function pay($amount) {
		$this->moneybooker->doPayment($amount);
	}
}

// Client Code
$moneybooker = new moneybookerAdapter(new MoneyBooker() );
$moneybooker->pay('2629');
