<?php echo Form::open(array("class"=>"form-horizontal","action"=>empty($current_user) ? 'users/create' : 'users/update')); ?>
<?php 

if(!empty($current_user)){ 
	$user = Model_User::find($current_user->id);
 } 
 ?>

<div class="col-md-12">
          <div class="nav-tabs-custom" style="box-shadow: 0px 0px 1px;">
            <ul class="nav nav-tabs">
              <?php if(!empty($current_user)){ ?>
	              <li class="active"><a href="#generalInformation" data-toggle="tab">General Information</a></li>
	              <li><a href="#additionalInfo" data-toggle="tab">Additional Information</a></li>
	              <li><a href="#Networks" data-toggle="tab">Profile Networks</a></li>
	              <li><a href="#uploadGalleries" data-toggle="tab">Galleries</a></li>
	              <li><a href="#professionalCard" data-toggle="tab">Professional Card</a></li>
              <?php }else{ ?>
              	<li class="active"><a href="#primaryInfo" data-toggle="tab">Primary Information</a></li>
              <?php } ?>

            </ul>
            <div class="tab-content" style="max-width: 90%; margin-left: 5%">
              
              <!-- /.tab-pane -->
            <?php if(!empty($current_user)){ ?>

	              <div class="active tab-pane col-md-12" id="generalInformation">
	              <br>
	              	<fieldset>
							<div class="form-group col-md-3">
								<?php echo Form::label('First Name', 'first_name', array('class'=>'control-label')); ?>
									<?php echo Form::input('first_name', Input::post('first_name', isset($user) ? $user->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First Name')); ?>
							</div>
							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('Middle Name', 'middle_name', array('class'=>'control-label')); ?>
									<?php echo Form::input('middle_name', Input::post('middle_name', isset($user) ? $user->middle_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Middle Name')); ?>
							</div>
							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('Last Name', 'last_name', array('class'=>'control-label')); ?>
									<?php echo Form::input('last_name', Input::post('last_name', isset($user) ? $user->last_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last Name')); ?>
							</div>
							<div class="col-md-1"></div>




							<div class="form-group col-md-3">
								<?php echo Form::label('Street', 'street', array('class'=>'control-label')); ?>
									<?php echo Form::input('street', Input::post('street', isset($user) ? $user->profile->street : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Street')); ?>
							</div>
							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('City', 'city', array('class'=>'control-label')); ?>
									<?php echo Form::input('city', Input::post('city', isset($user) ? $user->profile->city : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'City')); ?>
							</div>
							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('Postal Code', 'postal_code', array('class'=>'control-label')); ?>
									<?php echo Form::input('postal_code', Input::post('postal_code', isset($user) ? $user->profile->postal_code : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Postal Code')); ?>
							</div>
							<div class="col-md-1"></div>


							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('Zip Code', 'zip_code', array('class'=>'control-label')); ?>
									<?php echo Form::input('zip_code', Input::post('zip_code', isset($user) ? $user->profile->zip_code : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Zip Code')); ?>
							</div>
							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('State', 'state', array('class'=>'control-label')); ?>
									<?php echo Form::input('state', Input::post('state', isset($user) ? $user->profile->state : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'State')); ?>
							</div>
							<div class="col-md-1"></div>
							<div class="form-group col-md-3">
								<?php echo Form::label('Country', 'country', array('class'=>'control-label')); ?>
									<?php echo Form::input('country', Input::post('country', isset($user) ? $user->profile->country : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Country')); ?>
							</div>
							<div class="col-md-1"></div>





							<div class="form-group col-md-12">
								<?php echo Form::label('Designation', 'designation', array('class'=>'control-label')); ?>
									<?php echo Form::input('designation', Input::post('designation', isset($user) ? $user->profile->designation : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Designation')); ?>
							</div>

							<div class="clearfix"></div>
					</fieldset>
	              </div>
	              <!-- /secondary information -->

	              <div class="tab-pane" id="additionalInfo">
	              <br>
	              	<fieldset>
							<div class="form-group">
								<?php echo Form::label('Education', 'education', array('class'=>'control-label')); ?>
									<?php echo Form::textarea('education', Input::post('education', isset($user) ? $user->profile->education : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Education')); ?>
							</div>

							<div class="form-group">
								<?php echo Form::label('Experience', 'experience', array('class'=>'control-label')); ?>
									<?php echo Form::textarea('experience', Input::post('experience', isset($user) ? $user->profile->experience : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Experience')); ?>
							</div>

							<div class="form-group">
								<?php echo Form::label('Skills', 'skills', array('class'=>'control-label')); ?>
									<?php echo Form::textarea('skills', Input::post('skills', isset($user) ? $user->profile->skills : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Skills')); ?>
							</div>

							<div class="form-group">
								<?php echo Form::label('Background', 'background', array('class'=>'control-label')); ?>
									<?php echo Form::textarea('background', Input::post('background', isset($user) ? $user->profile->background : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Background')); ?>
							</div>
					</fieldset>
	              </div>
	              <!-- /.additional information -->


	              <div class="tab-pane" id="Networks">
	              <br>
	              	<fieldset>
							<div class="form-group">
								<?php echo Form::label('Facebook', 'facebook', array('class'=>'control-label')); ?>
									<?php echo Form::input('facebook', Input::post('facebook', isset($user) ? $user->network->facebook : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Facebook')); ?>
							</div>

							<div class="form-group">
								<?php echo Form::label('Twitter', 'twitter', array('class'=>'control-label')); ?>
									<?php echo Form::input('twitter', Input::post('twitter', isset($user) ? $user->network->twitter : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Twitter')); ?>
							</div>

							<div class="form-group">
								<?php echo Form::label('LinkedIn', 'linkedin', array('class'=>'control-label')); ?>
									<?php echo Form::input('linkedin', Input::post('linkedin', isset($user) ? $user->network->linkedin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'LinkedIn')); ?>
							</div>

							<div class="form-group">
								<?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>
									<?php echo Form::input('website', Input::post('website', isset($user) ? $user->network->website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Website')); ?>
							</div>

					</fieldset>
	              </div>
		          <!-- /.networks -->

	            <div class="tab-pane" id="uploadGalleries">
	            	<br>
		            <?php echo Request::forge('cropper/list/galleries')->execute(); ?>
	            </div>
		          <!-- /.galleries -->

	             <div class="tab-pane" id="professionalCard">
	              <br>
	              	<fieldset>
	              	<div style="margin-left: 30%;">
	              		<div class="card text-center" style="width: 30rem;border: 2px solid red; padding:10px;">
	              		 <img class="card-img-top text-center" src="<?=Uri::create('assets/img/card.jpg');?>" alt="Card image cap" style="width:100%;">
	              		  <div class="card-block">
	              		   <h4 class="card-title">Ishwor Prasad Rijal</h4>
	              		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	              		   <a href="#" class="btn btn-default"><i class="fa fa-fw fa-facebook-square"></i></a> 
	              		   <a href="#" class="btn btn-default"><i class="fa fa-tw fa-twitter-square"></i></a> 
	              		   <a href="#" class="btn btn-default"><i class="fa fa-tw fa-linkedin-square"></i></a> 
	              		   <a href="#" class="btn btn-default"><i class="fa fa-tw   fa-skype"></i></a> 
	              		   <a href="#" class="btn btn-default"><i class="fa fa-tw   fa-envelope-square"></i></a>
	              		   <a href="#" class="btn btn-default"><i class="fa fa-tw   fa-link"></i></a> 
	              		  </div>
	              		</div>
	              	</div>
	              	</fieldset>
	            </div>
	            <!-- /.professional card -->
            <?php }else{ ?>
				<div class="active tab-pane" id="primaryInfo">
              		<fieldset>
						<div class="form-group">
							<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>
								<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>
						</div>

						<div class="form-group">
							<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>
								<?php echo Form::password('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password')); ?>
						</div>

						<div class="form-group">
							<?php echo Form::label('Confirm Password', 'confirm_password', array('class'=>'control-label')); ?>
								<?php echo Form::password('confirm_password', Input::post('confirm_password',''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Confirm Password')); ?>
						</div>

						<div class="form-group">
							<?php echo Form::label('Gender', 'gender', array('class'=>'control-label')); ?>
								<?php echo Form::input('gender', Input::post('gender', isset($user) ? $user->gender : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Gender')); ?>
						</div>

						<div class="form-group">
							<?php echo Form::label('Email Address', 'email', array('class'=>'control-label')); ?>
								<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email Address','required','type'=>'email')); ?>
						</div>
					</fieldset>
              </div>
            <?php } ?>
            <!-- /.tab-content -->



			<div class="form-group">
				<label class='control-label'>&nbsp;</label>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		
			</div>
			<br>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
<?php echo Form::close(); ?>
