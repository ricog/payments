<?php
class CreditCardPayment extends AppModel {
	var $name = 'CreditCardPayment';
	var $actsAs = array(
		'Authnet.Authnet' => array(
			'fields' => array(
				'card_num' => 'number',
				'exp_date' => 'expiration',
			),
		),
	);
	var $validate = array(
		'cardholder_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a valid Card Holder Name',
				//'allowEmpty' => false,
				'required' => true,
			),
		),
		'number' => array(
			'cc' => array(
				'rule' => array('cc', 'fast'),
				'message' => 'Invalid credit card number',
				'required' => true,
			),
		),
		'expiration' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Invalid expiration date',
				'required' => false,
			),
		),
		'card_code' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Invalid card code',
				'required' => true,
			),
		),
	);
	
/**
 * Takes controller data, sets and validates it like normal, and then
 * cleans it up for re-display or saving into the session. 
 */
	function setAndValidate($data) {
		$this->set($data);
		$this->validates();
		$data = $this->data;

		if (empty($this->validationErrors)) {
			// Only store last 4 digits of credit card number.
			$data['CreditCardPayment']['number'] = 'XXXX' . substr($data['CreditCardPayment']['number'], -4);
		} else {
			// If validation failed, clear the credit card
			unset($data['CreditCardPayment']['number']);
		}
		
		// Clear out the card code, it is against processor terms to store it in the database.
		unset($data['CreditCardPayment']['card_code']);
		
		return $data;
	}
	
}
