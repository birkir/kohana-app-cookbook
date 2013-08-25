<!DOCTYPE html>
<html>
	<head>
		<title><?=!empty($title)?$title.' | ':NULL;?>Paleo Uppskriftarbók</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-touch-fullscreen" content="yes" />
        <link rel="shortcut icon" href="/media/img/favico.png" />
		<link href="/media/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/media/css/themes/<?=empty(Auth::instance()->get_user()->theme) ? 'cerulean' : Auth::instance()->get_user()->theme;?>.css" rel="stylesheet" media="screen">
		<?php if ($jqueryui): ?><link href="/media/css/jquery-ui-1.10.0.css" rel="stylesheet" media="screen"><?php endif; ?>

		<link href="/media/css/application.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="/">Paleo Uppskriftarbók</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="<?=Request::current()->controller()==='Recipe'?' active':NULL;?>"><a href="/recipe"><?=__('Recipes');?></a></li>
							<li<?php if (Request::current()->controller() === 'Ingredient'): ?> class="active"<?php endif; ?>><a href="/ingredient"><?=__('Ingredients');?></a></li>
							<li<?php if (Request::current()->controller() === 'Menu'): ?> class="active"<?php endif; ?>><a href="/menu"><?=__('Menu');?></a></li>
							<li<?php if (Request::current()->controller() === 'User'): ?> class="active"<?php endif; ?>>
<?php if ($user->logged_in()): ?>
								<a href="/user/profile"><?=__('Profile');?></a>
<?php else: ?>
								<a href="/user/login"><?=__('Login');?></a>
<?php endif; ?>
							</li>
<?php if ($user->logged_in()): ?>
							<li><a href="/user/logout"><?=__('Logout');?></a></li>
<?php endif; ?>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<?= ! empty($view) ? $view : NULL;?>
		</div>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<?php if ($jqueryui): ?><script src="/media/js/jquery-ui-1.10.0.min.js"></script><?php endif; ?>

		<script src="/media/js/bootstrap.min.js"></script>
		<script src="/media/js/jquery.tokeninput.js"></script>
		<script src="/media/js/application.js"></script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-17585560-2']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</body>
</html>