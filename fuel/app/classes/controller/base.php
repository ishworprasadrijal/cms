<?php

class Controller_Base extends Controller_Template
{
	public function before()
	{

		$this->current_user = null;

		foreach (\Auth::verified() as $driver)
		{
			if (($id = $driver->get_user_id()) !== false)
			{
				$this->current_user = Model\Auth_User::find($id[1]);
			}
			break;
		}
		// var_dump($this->request->action);exit;

		if(!Auth::has_access(array($this->request->controller,$this->request->action))){
			Session::set_flash('error','You are not allowed to use that section.');
			Response::redirect('/');
		}

		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);
		View::set_global('current_controller', $this->request->controller);
		View::set_global('current_action', $this->request->action);
		parent::before();
	}

}
