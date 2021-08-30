<?php

namespace core;

class Form
{
	public $form;

	public function __construct($action, $method, $additional = '')
	{
		$this->form = sprintf('<form action="%s" method="%s" %s>', $action, $method, $additional);
	}
	public function text($name, $label)
	{
		$this->form .= sprintf('<div class="form-group">
									<label>%s</label>
									<input type="text" name="%s" class="form-control"/>
								</div>', $label, $name);
	}

	public function textarea($name, $label)
	{
		$this->form .= sprintf('<div class="form-group">
									<label>%s</label>
									<textarea name="%s" class="form-control"></textarea>
								</div>', $label, $name);
	}

	public function button($name, $label)
	{
		$this->form .= sprintf('<button class="btn btn-primary" type="submit" name="%s">%s</button>', $name, $label);
	}

	public function generate()
	{
		$this->textarea('message', 'Message');
		$this->button('submit', 'Send');

		$this->form .= '</form>';

		return $this->form;
	}
}