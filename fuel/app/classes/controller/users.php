<?php
class Controller_Users extends Controller_Base
{
	public function action_before(){
		parent::before();
	}

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Users";
		$this->template->content = View::forge('users/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $data['user'] = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$this->template->title = "User";
		$this->template->content = View::forge('users/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');

			if ($val->run())
			{
				$username = Input::Post('username');
				$first_name = Input::Post('first_name');
				$middle_name = Input::Post('middle_name');
				$last_name = Input::Post('last_name');
				$email = Input::Post('email');
				$password = Input::Post('password');
				$confirm_password = Input::Post('confirm_password');
				$gender = Input::Post('gender');
				$group = Input::Post('group');

				$id = Auth::create_user($username,$password,$email,1,
					array(
						'first_name' => $first_name,
						'middle_name' => $middle_name,
						'last_name' => $last_name,
						'gender' => $gender,
						)
					);

				$user = Model_User::find($id);
				if($user){
					$user->first_name = $first_name;
					$user->middle_name = $middle_name;
					$user->last_name = $last_name;
					$user->gender = $gender;
					if($user->save()){
						$userprofile = Model_Userprofile::forge(array(
								'user_id'=>$user->id
							));
						if($userprofile->save()){
							if(Auth::login($username, $password)){
								Session::set_flash('success','User Registration Success.');
								Response::redirect('admin');
							}
						}
					}
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $user = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$val = Model_User::validate('edit');

		if ($val->run())
		{
			$user->username = Input::post('username');
			$user->password = Input::post('password');
			$user->group = Input::post('group');
			$user->email = Input::post('email');
			$user->last_login = Input::post('last_login');
			$user->login_hash = Input::post('login_hash');
			$user->profile_fields = Input::post('profile_fields');

			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);

				Response::redirect('users');
			}

			else
			{
				Session::set_flash('error', 'Could not update user #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				$user->group = $val->validated('group');
				$user->email = $val->validated('email');
				$user->last_login = $val->validated('last_login');
				$user->login_hash = $val->validated('login_hash');
				$user->profile_fields = $val->validated('profile_fields');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', 'Deleted user #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete user #'.$id);
		}

		Response::redirect('users');

	}

	public function action_set_profile_picture(){
		$path = Input::Post('message');
		$title = Input::Post('title');
		@move_uploaded_file($path,'assets/users/'.$title);
		$this->current_user->profile->profile_image = $title;
		$output['status'] = 'success';
		$output['message'] = 'Success';
		return Format::forge($output)->to_json();
	}

}
