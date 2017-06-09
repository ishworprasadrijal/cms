<?php
class Controller_Actions extends Controller_Base
{
	public function action_before(){
		parent::before();
	}

	public function action_index()
	{
		$data['actions'] = Model_Action::find('all');
		$this->template->title = "Actions";
		$this->template->content = View::forge('actions/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('actions');

		if ( ! $data['action'] = Model_Action::find($id))
		{
			Session::set_flash('error', 'Could not find action #'.$id);
			Response::redirect('actions');
		}

		$this->template->title = "Action";
		$this->template->content = View::forge('actions/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Action::validate('create');

			if ($val->run())
			{
				$action = Model_Action::forge(array(
					'action' => Input::post('action'),
					'title' => Input::post('title'),
					'description' => Input::post('description'),
					'icon' => Input::post('icon'),
					'status' => Input::post('status'),
				));

				if ($action and $action->save())
				{
					Session::set_flash('success', 'Added action #'.$action->id.'.');

					Response::redirect('actions');
				}

				else
				{
					Session::set_flash('error', 'Could not save action.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Actions";
		$this->template->content = View::forge('actions/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('actions');

		if ( ! $action = Model_Action::find($id))
		{
			Session::set_flash('error', 'Could not find action #'.$id);
			Response::redirect('actions');
		}

		$val = Model_Action::validate('edit');

		if ($val->run())
		{
			$action->action = Input::post('action');
			$action->title = Input::post('title');
			$action->description = Input::post('description');
			$action->icon = Input::post('icon');
			$action->status = Input::post('status');

			if ($action->save())
			{
				Session::set_flash('success', 'Updated action #' . $id);

				Response::redirect('actions');
			}

			else
			{
				Session::set_flash('error', 'Could not update action #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$action->action = $val->validated('action');
				$action->title = $val->validated('title');
				$action->description = $val->validated('description');
				$action->icon = $val->validated('icon');
				$action->status = $val->validated('status');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('action', $action, false);
		}

		$this->template->title = "Actions";
		$this->template->content = View::forge('actions/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('actions');

		if ($action = Model_Action::find($id))
		{
			$action->delete();

			Session::set_flash('success', 'Deleted action #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete action #'.$id);
		}

		Response::redirect('actions');

	}

}
