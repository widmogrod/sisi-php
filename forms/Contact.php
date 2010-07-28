<?php
require_once 'Zend/Form.php';

class Form_Contact extends Zend_Form
{
	public function init() {
		$this->setMethod('POST');

		$this
			->addElement('text','username', array(
				'label' => 'Imię i nazwisko',
				'options' => array(
					'required' => true
				)
			))
			->addElement('text','email', array(
				'label' => 'Adres Email',
				'options' => array(
					'required' => true,
					'validators' => array('EmailAddress')
				)
			))
			->addElement('text','phone', array(
				'label' => 'Numer telefonu',
				'options' => array(
					'required' => false
				)
			))
			->addElement('text','content', array(
				'label' => 'Treść zapytania',
				'options' => array(
					'required' => true
				)
			))
			->addElement('submit','submit', array(
				'label' => 'Wyślij zapytanie',
				'options' => array(
					'ignore' => true
				)
			));
	}
}
