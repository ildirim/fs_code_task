<?php
namespace core;

use core\FormService;

abstract class SenderService extends FormService
{
	public abstract function send();
}