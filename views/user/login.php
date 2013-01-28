<div class="content">
	<div class="row-fluid">
		<div class="span6 offset3">
			<div class="login-form">
				<h2><?=__('Login');?></h2>
				<form action="/user/login" method="post">
					<fieldset>
						<div class="control-group">
							<input type="text" placeholder="<?=__('Username');?>" name="username" class="input-block-level">
						</div>
						<div class="control-group">
							<input type="password" placeholder="<?=__('Password');?>" name="password" class="input-block-level">
						</div>
						<button class="btn btn-primary" type="submit"><?=__('Sign in');?></button>
						<a href="/user/register" class="btn"><?=__('Sign up (free)');?></a>
					</fieldset>
				</form>
			</div>
			<p style="text-align: center;"><br /><a href="/user/lost-password"><?=__('Lost username or/and password');?></a></p>
		</div>
	</div>
</div>
<style type="text/css">
.login-form { background-color: #eee; padding: 20px; margin: 0 20px; -webkit-border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; border-radius: 10px 10px 10px 10px; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15); -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15); box-shadow: 0 1px 2px rgba(0,0,0,.15); }
</style>