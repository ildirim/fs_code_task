<?php
namespace core;

use core\Form;

abstract class FormService
{
	public function __construct()
	{
		$this->form = new Form('/', 'post', 'onSubmit="return false;"');
	}

	public abstract function generateForm();
}