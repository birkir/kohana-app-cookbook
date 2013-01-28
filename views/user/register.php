<div class="content">
	<div class="row-fluid">
		<div class="span6 offset3 ">
			<div class="register-form">
				<?php if ($success): ?>
					<?=$message;?>
				<?php else: ?>
				<h2><?=__('Sign up');?></h2>
				<?php if ($message): ?>
					<div class="alert alert-error">
						<?=__($message);?>
					</div>
				<?php endif; ?>
				<form action="/user/register" method="post">
					<fieldset>
						<div class="control-group<?=(isset($errors['email']) ? ' error' : NULL);?>">
							<label for="signupEmail" class="control-label"><?=__('E-Mail address');?></label>
							<div class="controls">
								<input type="email" name="email" value="<?=Arr::get($_POST, 'email');?>" class="input-block-level" id="signupEmail" placeholder="example@example.com">
							</div>
							<?=(isset($errors['email']) ? '<span class="help-block">'.$errors['email'].'</span>' : NULL);?>
						</div>
						<div class="control-group<?=(isset($errors['username']) ? ' error' : NULL);?>">
							<label for="signupUsername" class="control-label"><?=__('Username');?></label>
							<div class="controls">
								<input type="text" name="username" value="<?=Arr::get($_POST, 'username');?>" class="input-block-level" id="signupUsername">
							</div>
							<?=(isset($errors['username']) ? '<span class="help-block">'.$errors['username'].'</span>' : NULL);?>
						</div>
						<div class="control-group<?=(isset($errors['_external']['password']) ? ' error' : NULL);?>">
							<label for="signupPassword" class="control-label"><?=__('Password');?></label>
							<div class="controls">
								<input type="password" name="password" class="input-block-level" id="signupPassword" placeholder="<?=__('min 6 characters');?>">
							</div>
							<?=(isset($errors['_external']['password']) ? '<span class="help-block">'.$errors['_external']['password'].'</span>' : NULL);?>
						</div>
						<div class="control-group<?=(isset($errors['_external']['password_confirm']) ? ' error' : NULL);?>">
							<label for="signupPassword2" class="control-label"><?=__('Re-type password');?></label>
							<div class="controls">
								<input type="password" name="password_confirm" class="input-block-level" id="signupPassword2">
							</div>
							<?=(isset($errors['_external']['password_confirm']) ? '<span class="help-block">'.UTF8::ucfirst(__($errors['_external']['password_confirm'])).'</span>' : NULL);?>
						</div>
						<button class="btn btn-primary" type="submit"><?=__('Sign up');?></button>
					</fieldset>
				</form>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
.register-form { background-color: #eee; padding: 20px; margin: 0 20px; -webkit-border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; border-radius: 10px 10px 10px 10px; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15); -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15); box-shadow: 0 1px 2px rgba(0,0,0,.15); }
</style>