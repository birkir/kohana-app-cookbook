<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="/media/img/favico.png" />

		<title><?=empty($title) ? NULL : $title.' | ';?> Cookbook</title>

		<!-- Bootstrap core CSS -->
		<link href="/media/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles -->
		<link href="/media/css/bootstrap-todc.css" rel="stylesheet">
		<link href="/media/css/font-awesome.css" rel="stylesheet">
		<link href="/media/css/application.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="../../assets/js/html5shiv.js"></script>
			<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<!-- Navbar -->
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/" class="navbar-brand">Cookbook</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="<?=Request::current()->controller() === 'Recipe' ? ' active' : NULL;?>"><a href="/Recipe"><?=__('Recipes');?></a></li>
						<li class="<?=Request::current()->controller() === 'Ingredient' ? ' active' : NULL;?>"><a href="/Ingredient"><?=__('Ingredients');?></a></li>
						<?php if ($user->logged_in()): ?>
							<li class="<?=Request::current()->controller() === 'Account' ? ' active' : NULL;?>"><a href="/Account/Profile"><?=__('Profile');?></a></li>
							<li><a href="/Account/Logout"><?=__('Sign out');?></a></li>
						<?php else: ?>
							<li><a href="/Account/Login"><?=__('Sign in');?></a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">

			<?=empty($view) ? NULL : $view;?>

		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/media/js/jquery.js"></script>
		<script src="/media/js/bootstrap.js"></script>
		<script src="/media/js/application.js"></script>

		<!-- Google Analytics for tracking visitors -->
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