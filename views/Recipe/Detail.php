<?php $s = Arr::get(Request::initial()->query(), 'serve', $item->serving_size); ?>

<nav class="navbar navbar-toolbar navbar-default" role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-toolbar-ex1-collapse">
			<span class="sr-only"><?=__('Toggle navigation');?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<span class="navbar-brand"><?=$item->name;?></span>
	</div>

	<div class="collapse navbar-collapse navbar-toolbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<?php if ($user->logged_in()): ?>
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?=__('Options');?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-submenu pull-left">
							<a href="#" tabindex="-1">How many</a>
							<ul class="dropdown-menu" style="margin-left: -2px;margin-top: -1px;width: 50%;">
								<?php for ($i = 1; $i <= 15; $i++):?>
									<li role="presentation"><a href="?serve=<?=$i;?>"><?=$i;?> <?=Inflector::noun($item->serving_type, $i);?></a></li>
								<?php endfor; ?>
							</ul>
						</li>
						<li class="dropdown-submenu pull-left">
							<a href="#" tabindex="-1">Add to my menu</a>
							<?php $menus = ORM::factory('Menu')->where('user_id', '=', $user->get_user()->id)->find_all(); ?>
							<ul class="dropdown-menu" style="margin-left: -2px;margin-top: -1px;width: 50%;">
								<?php if (count($menus->as_array()) > 0): ?>
									<?php foreach ($menus as $menu): ?>
										<li role="presentation"><a href="/Menu/Detail/<?=$menu->id;?>?recipe_id=<?=$item->id;?>"><?=$menu->name;?></a></li>
									<?php endforeach; ?>
								<?php else: ?>
								<li><a href="/menu/create"><?=__('Add menu');?></a></li>
								<?php endif; ?>
							</ul>
						</li>
						<?php if ($user->logged_in('admin') OR ($user->get_user()->id == $item->user_id)): ?>
							<li><a href="/Recipe/Edit/<?=$item->id;?>"><?=__('Edit recipe');?></a></li>
						<?php endif; ?>
					</ul>
				</li>
			<?php endif; ?>
			<li><a href="/Recipe"><?=__('Go back');?></a></li>
		</ul>
	</div>
</nav>

<div class="row">
	<div class="col-lg-9">
		<ul class="list-inline">
			<li><strong><?=__('Amount');?></strong> <span> <?=$s;?> <?=Inflector::noun($item->serving_type, $s);?></span></li>
			<li><strong><?=__('Preptime');?></strong> <span><?=$item->preptime;?>m</span></li>
			<li><strong><?=__('Cooktime');?></strong> <span><?=$item->cooktime;?>m</span></li>
		</ul>
		<hr>
		<ul>
			<?php foreach ($item->all_ingredients() as $ingredient): ?>
				<?php if ( ! isset($last_group) || $last_group !== $ingredient->group): ?>
					</ul><h4><?=UTF8::ucfirst($ingredient->group);?><?=$ingredient->group ? ' '.__('ingredients') : ' '.UTF8::ucfirst(__('ingredients'));?></h4><ul>
				<?php $last_group = $ingredient->group; endif; ?>
				<li rel="tooltip" data-toggle="tooltip" title="<?=Num::round($ingredient->weight($ingredient->amount * ($s / $item->serving_size), $ingredient->unit),2);?> g" data-placement="left">
					<?=$item::to_fraction($ingredient->amount * ($s / $item->serving_size));?>
					<?=__($units[$ingredient->unit]);?>
					<?=$ingredient->name_is;?>
					<?=( ! empty($ingredient->note) ? ' <span class="muted"> - '.$ingredient->note.'</span>' : NULL);?>
				</li>
			<?php endforeach; ?>
		</ul>
		<hr>
		<h4><?=__('Method');?></h4>
		<?=$item->description;?>
		<br /><br />
		<div class="hidden-xs">
		<hr>
		<br>
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
		<fb:comments href="http://paleo.forritun.org/recipe/detail/<?=$item->id;?>" num_posts="1" style="width: 100%;"></fb:comments>
		<style type="text/css">.fb_iframe_widget > span, .fb_iframe_widget > span > iframe { width: 100% !important; }</style>
		</div>
	</div>
	<div class="col-lg-3">
		<?php if ($item->photo): ?>
			<a href="/recipe/photo/<?=$item->id;?>/large.jpg" rel="modal" class="preview">
				<img src="/recipe/photo/<?=$item->id;?>/large.jpg" alt="" style="width: 100%;">
			</a>
			<br/><br />
		<?php endif; ?>
		<?=$nutrition;?>
	</div>
</div>