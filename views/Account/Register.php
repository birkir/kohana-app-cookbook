<?=$form;?>

<?php if ( ! $form->model->saved()): ?>
	<div class="well">
		<?=$form->open('Account/Register', ['method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']);?>
			<fieldset>
				<legend><?=__('Register');?></legend>
				<div class="form-group<?=$form->has('email');?>">
					<?=Form::label('registerEmail', __('E-Mail address'), ['class' => 'col-lg-2 control-label']);?>
					<div class="col-lg-6">
						<?=Form::input('email', $form->value('email'), ['class' => 'form-control', 'id' => 'registerEmail', 'placeholder' => 'example@example.com', 'type' => 'email']);?>
					</div>
					<?=$form->helper('email');?>
				</div>
				<div class="form-group<?=$form->has('username');?>">
					<?=Form::label('registerUsername', __('Username'), ['class' => 'col-lg-2 control-label']);?>
					<div class="col-lg-6">
						<?=Form::input('username', $form->value('email'), ['class' => 'form-control', 'id' => 'registerUsername', 'autocomplete' => 'off']);?>
					</div>
					<?=$form->helper('username');?>
				</div>
				<div class="form-group<?=$form->has('password');?>">
					<?=Form::label('registerPassword', __('Password'), ['class' => 'col-lg-2 control-label']);?>
					<div class="col-lg-6">
						<?=Form::password('password', NULL, ['class' => 'form-control', 'id' => 'registerPassword', 'placeholder' => __('min 6 characters')]);?>
					</div>
					<?=$form->helper('_external.password');?>
				</div>
				<div class="form-group<?=$form->has('password_confirm');?>">
					<?=Form::label('registerPassword2', __('Re-type password'), ['class' => 'col-lg-2 control-label']);?>
					<div class="col-lg-6">
						<?=Form::password('password_confirm', NULL, ['class' => 'form-control', 'id' => 'registerPassword2']);?>
					</div>
					<?=$form->helper('_external.password_confirm');?>
				</div>
				<div class="form-group">
					<div class="col-lg-6 col-lg-offset-2">
						<a href="/Account/Login" class="btn btn-default"><?=__('Cancel');?></a>
						<button class="btn btn-primary" type="submit"><?=__('Register');?></button>
					</div>
				</div>
			</fieldset>
		<?=$form->close();?>
	</div>
<?php endif; ?>