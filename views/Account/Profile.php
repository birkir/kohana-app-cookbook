<nav class="navbar navbar-toolbar navbar-default" role="navigation">
	<div class="navbar-header">
		<span class="navbar-brand"><?=__('Profile');?></span>
	</div>
</nav>

<?$form;?>

<div class="well">
	<?=$form->open('Account/Profile', ['method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']);?>
	<fieldset>
		<div class="form-group<?=$form->has('username');?>">
			<?=Form::label('profileUsername', __('Username'), ['class' => 'col-lg-2 control-label']);?>
			<div class="col-lg-6">
				<?=Form::input(NULL, $form->value('username'), ['class' => 'form-control', 'id' => 'profileUsername', 'disabled' => 'disabled']);?>
			</div>
			<?=$form->helper('username');?>
		</div>
		<div class="form-group<?=$form->has('email');?>">
			<?=Form::label('profileEmail', __('E-Mail address'), ['class' => 'col-lg-2 control-label']);?>
			<div class="col-lg-6">
				<?=Form::input(NULL, $form->value('email'), ['class' => 'form-control', 'id' => 'profileEmail', 'disabled' => 'disabled', 'placeholder' => 'example@example.com', 'type' => 'email']);?>
			</div>
			<?=$form->helper('email');?>
		</div>
		<div class="form-group<?=$form->has('lang');?>">
			<?=Form::label('profileLanguage', __('Language'), ['class' => 'col-lg-2 control-label']);?>
			<div class="col-lg-6">
				<?=Form::select('lang', ['is-is' => 'Íslenska', 'en-us' => 'English'], $form->value('lang'), ['class' => 'form-control', 'id' => 'profileLanguage']);?>
			</div>
			<?=$form->helper('lang');?>
		</div>

		<div class="form-group<?=$form->has('grocery_day');?>">
			<?=Form::label('profileGroceryDay', __('When do you grocery shopping?'), ['class' => 'col-lg-2 control-label']);?>
			<div class="col-lg-6">
				<?=Form::select('grocery_day', $days, $form->value('grocery_day'), ['class' => 'form-control', 'id' => 'profileGroceryDay']);?>
			</div>
			<?=$form->helper('grocery_day');?>
		</div>
		<div class="form-group">
			<div class="col-lg-6 col-lg-offset-2">
				<button class="btn btn-primary" type="submit"><?=__('Save changes');?></button>
			</div>
		</div>
	</fieldset>
</div>