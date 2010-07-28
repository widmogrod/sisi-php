<?php
require_once 'Zend/Form.php';
require_once 'Zend/Validate/StringLength.php';

class Form_Contact extends Zend_Form
{
	public function init() {
		$this->setMethod('POST');

		$this
			->addElement('text','username', array(
				'label' => '↓ Imię i nazwisko',
				'required' => true,
				'validators' => array(
					'strlen' => new Zend_Validate_StringLength(array('min' => 5))
				)
			))
			->addElement('text','email', array(
				'label' => '↓ Adres Email',
				'required' => true,
				'validators' => array('EmailAddress')
			))
			->addElement('text','phone', array(
				'label' => '↓ Numer telefonu',
				'required' => false,
				'validators' => array(
					'strlen' => new Zend_Validate_StringLength(array('min' => 7))
				)
			))
			->addElement('textarea','mail-content', array(
				'label' => '↓ Treść zapytania',
				'required' => true,
				'validators' => array(
					'strlen' => new Zend_Validate_StringLength(array('min' => 10))
				)
			))
			->addElement('submit','submit', array(
				'label' => 'Wyślij zapytanie',
				'ignore' => true
			));
	}
}
