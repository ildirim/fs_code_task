<?php

namespace plugins;

use core\SenderService;

class SendEmail extends SenderService
{
	public function generateForm()
	{
		$this->form->text('email', 'Email');
		$this->form->text('subject', 'Subject');

		echo $this->form->generate();
	}

	public function send()
	{
		return 'This mail sending by SendEmail Class';
	}
}