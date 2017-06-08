<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('First Name', 'first_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('first_name', Input::post('first_name', isset($user) ? $user->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Middle Name', 'middle_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('middle_name', Input::post('middle_name', isset($user) ? $user->middle_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Middle Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last Name', 'last_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_name', Input::post('last_name', isset($user) ? $user->last_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last Name')); ?>

		</div>



		<div class="form-group">
			<?php echo Form::label('Gender', 'gender', array('class'=>'control-label')); ?>

				<?php echo Form::input('gender', Input::post('gender', isset($user) ? $user->gender : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Gender')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Email Address', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email Address','required','type'=>'email')); ?>

		</div>



		<div class="form-group">
			<?php echo Form::label('Street', 'street', array('class'=>'control-label')); ?>

				<?php echo Form::input('street', Input::post('street', isset($user) ? $user->street : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Street')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('City', 'city', array('class'=>'control-label')); ?>

				<?php echo Form::input('city', Input::post('city', isset($user) ? $user->city : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'City')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Postal Code', 'postal_code', array('class'=>'control-label')); ?>

				<?php echo Form::input('postal_code', Input::post('postal_code', isset($user) ? $user->postal_code : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Postal Code')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Zip Code', 'zip_code', array('class'=>'control-label')); ?>

				<?php echo Form::input('zip_code', Input::post('zip_code', isset($user) ? $user->zip_code : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Zip Code')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('State', 'state', array('class'=>'control-label')); ?>

				<?php echo Form::input('state', Input::post('state', isset($user) ? $user->state : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'State')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Country', 'country', array('class'=>'control-label')); ?>

				<?php echo Form::input('country', Input::post('country', isset($user) ? $user->country : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Country')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Designation', 'designation', array('class'=>'control-label')); ?>

				<?php echo Form::input('designation', Input::post('designation', isset($user) ? $user->designation : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Designation')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Education', 'education', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('education', Input::post('education', isset($user) ? $user->education : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Education')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Experience', 'experience', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('experience', Input::post('experience', isset($user) ? $user->experience : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Experience')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Skills', 'skills', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('skills', Input::post('skills', isset($user) ? $user->skills : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Skills')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Background', 'bio', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('bio', Input::post('bio', isset($user) ? $user->bio : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Background')); ?>

		</div>





		<div class="form-group">
			<?php echo Form::label('Login hash', 'login_hash', array('class'=>'control-label')); ?>

				<?php echo Form::input('login_hash', Input::post('login_hash', isset($user) ? $user->login_hash : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Login hash')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Profile fields', 'profile_fields', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('profile_fields', Input::post('profile_fields', isset($user) ? $user->profile_fields : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Profile fields')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>