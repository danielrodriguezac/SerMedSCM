<?php

/**
 * The welcome 404 view model.
 *
 * @package  app
 * @extends  ViewModel
 */
class View_Welcome_404 extends ViewModel
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 * 
	 * @return void
	 */
	public function view()
	{
		$messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?', 'Must have taken a wrong turn, Pal.');
		$this->title = $messages[array_rand($messages)];
	}
}
