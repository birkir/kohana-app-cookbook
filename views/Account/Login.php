<?=Form::open('Account/Login', ['method' => 'post', 'class' => 'form-signin']);?>
	<h2 class="form-signin-heading"><?=__('Please sign in');?></h2>
	<input type="text" name="username" class="form-control" placeholder="<?=__('Username');?>" autofocus>
	<input type="password" name="password" class="form-control" placeholder="<?=__('Password');?>">
	<label class="checkbox">
		<input type="checkbox" name="remember" value="remember-me"> <?=__('Remember me');?>
	</label>
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?=__('Sign in');?></button>
	<a href="/Account/Register" class="btn btn-link">Dont have account? Sign up (it's free!)</a>
<?=Form::close();?>