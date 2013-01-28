<h2><?=__('Profile');?></h2>
<form action="" method="post">
	<div class="control-group">
		<label for="profileUsername" class="control-label"><?=__('Username');?></label>
		<div class="controls">
			<input type="text" id="profileUsername" name="username" value="<?=$user->username;?>" disabled>
		</div>
	</div>
	<div class="control-group">
		<label for="profileEmail" class="control-label"><?=__('E-Mail address');?></label>
		<div class="controls">
			<input type="text" id="profileEmail" name="email" value="<?=$user->email;?>" disabled>
		</div>
	</div>
	<div class="control-group">
		<label for="profileGroceryDay" class="control-label"><?=__('When do you grocery shopping?');?></label>
		<div class="controls">
			<select name="grocery_day" id="profileGroceryDay">
				<?php foreach ($days as $i => $day): ?>
				<option value="<?=$i;?>"><?=UTF8::ucfirst(__($day));?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label for="profileTheme" class="control-label"><?=__('Theme');?></label>
		<div class="controls">
			<?=Form::select('theme', $themes, empty($user->theme) ? 'cerulean' : $user->theme, array('id' => 'profileTheme'));?>
		</div>
	</div>
	<div class="control-group">
		<button type="submit" class="btn btn-large btn-primary"><?=__('Save');?></button>
	</div>
</form>

<!--
<a href="/user/logout" class="btn btn-large btn-primary"><?=__('Logout');?></a>
-->