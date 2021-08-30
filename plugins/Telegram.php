<?php

namespace plugins;

use core\SenderService;

class Telegram extends SenderService
{
	public function generateForm()
	{
		$this->form->text('id', 'User id');
		$this->form->text('name', 'Name');
		$this->form->text('surname', 'Surname');

		echo $this->form->generate();
	}

	public function send()
	{
		return 'This mail sending by Telegram Class';
	}
}