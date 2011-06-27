<?php
/* CreditCard Fixture generated on: 2010-06-21 13:06:48 : 1277144088 */
class CreditCardFixture extends CakeTestFixture {
	var $name = 'CreditCard';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'signup_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'cardholder_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'number' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'expiration' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'signup_id' => 1,
			'cardholder_name' => 'Lorem ipsum dolor sit amet',
			'number' => 'Lorem ipsum dolor sit amet',
			'expiration' => '2010-06-21',
			'created' => '2010-06-21 13:14:48',
			'modified' => '2010-06-21 13:14:48'
		),
	);
}
