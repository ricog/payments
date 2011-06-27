<?php
/* CreditCard Test cases generated on: 2010-06-21 13:06:48 : 1277144088*/
App::import('Model', 'Payments.CreditCardPayment');

class CreditCardTestCase extends CakeTestCase {
	function startTest() {
		$this->CreditCardPayment =& ClassRegistry::init('CreditCardPayment');
	}

	function endTest() {
		unset($this->CreditCard);
		ClassRegistry::flush();
	}

}
