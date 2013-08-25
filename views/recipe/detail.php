<?php $s = Arr::get(Request::initial()->query(), 'serve', $item->serving_size); ?>
<div class="row-fluid">
	<div class="span12">
		<?php if ($user->logged_in()): ?>
		<div class="btn-group pull-right" style="margin-top: 22px;">
			<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				<?=__('Options');?>
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li class="dropdown-submenu pull-left">
					<?php $menus = ORM::factory('Menu')->where('user_id', '=', $user->get_user()->id)->find_all(); ?>
					<a href="#"><?=__('Add to menu');?></a>
					<ul class="dropdown-menu">
						<?php if (count($menus->as_array()) > 0): ?>
							<?php foreach ($menus as $menu): ?>
								<li><a href="/menu/detail/<?=$menu->id;?>?recipe_id=<?=$item->id;?>"><?=$menu->name;?></a></li>
							<?php endforeach; ?>
						<?php else: ?>
						<li><a href="/menu/create"><?=__('Add menu');?></a></li>
						<?php endif; ?>
					</ul>
				</li>
<?php if ($user->logged_in('admin') OR ($user->get_user()->id == $item->user_id)): ?>
				<li><a href="/recipe/edit/<?=$item->id;?>"><?=__('Edit recipe');?></a></li>
<?php endif; ?>
			</ul>
		</div>
		<?php endif; ?>
		<h1><?=$item->name;?></h1>
		
		<ul class="inline">
			<li><strong><?=__('Amount');?></strong> <span> <?=$s;?> <?=Inflector::noun($item->serving_type, $s);?></span></li>
			<li><strong><?=__('Preptime');?></strong> <span><?=$item->preptime;?>m</span></li>
			<li><strong><?=__('Cooktime');?></strong> <span><?=$item->cooktime;?>m</span></li>
		</ul>

		<div class="btn-group pull-right hidden-phone">
			<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><?=$s;?> <?=Inflector::noun($item->serving_type, $s);?> <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php for ($i = 1; $i <= 15; $i++):?>
					<li><a href="?serve=<?=$i;?>"><?=$i;?> <?=Inflector::noun($item->serving_type, $i);?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<hr>
		<ul>
			<?php foreach ($ingredients as $ingredient): ?>
				<?php if ( ! isset($last_group) || $last_group !== $ingredient->group): ?>
					</ul><h4><?=UTF8::ucfirst($ingredient->group);?><?=$ingredient->group ? ' '.__('ingredients') : ' '.UTF8::ucfirst(__('ingredients'));?></h4><ul>
				<?php $last_group = $ingredient->group; endif; ?>
				<li rel="tooltip" title="<?=Num::round($ingredient->weight($ingredient->amount * ($s / $item->serving_size), $ingredient->unit),2);?> g" data-placement="left">
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
		<div class="hidden-phone">
		<hr>
		<br>
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
		<fb:comments href="http://paleo.forritun.org/recipe/detail/<?=$item->id;?>" num_posts="1" style="width: 100%;"></fb:comments>
		<style type="text/css">.fb_iframe_widget > span, .fb_iframe_widget > span > iframe { width: 100% !important; }</style>
		</div>
	</div>
	<div class="span3">
		<br>
		<?php if ($item->photo): ?>
			<a href="/recipe/photo/<?=$item->id;?>/800x600" rel="modal" class="preview">
				<img src="/recipe/photo/<?=$item->id;?>/480x320" alt="" style="width: 100%;">
			</a>
			<br/><br />
		<?php endif; ?>
		<div class="nutritions">
			<h2><?=__('Nutrition facts');?></h2>
			<p><?=__('Serving Size');?> <?=Num::round($ntr['weight'] / $item->serving_size, 1);?>g</p>
			<small><strong><?=__('Amount per 100g');?></strong></small><br />
			<strong><?=__('Calories');?></strong> <span><?=Num::round($ntr['calories'] / $ntr['weight'] * 100, 1);?></span>
			<hr>
			<dl>
				<dt><?=__('Total Fat');?></dt>
					<dd><?=Num::round($ntr['fat_total'] / $ntr['weight'] * 100, 1);?> g</dd>
					<dd class="p"><?=Num::round($ntr['fat_total']/$item->serving_size/65*100);?> %</dd>
				<dt class="inset"><?=__('Saturated Fat');?></dt>
					<dd><?=Num::round($ntr['fat_saturated'] / $ntr['weight'] * 100, 1);?> g</dd>
					<dd class="p"><?=Num::round($ntr['fat_saturated']/$item->serving_size/20*100);?> %</dd>
				<dt class="inset"><?=__('Trans Fat');?></dt>
					<dd><?=Num::round($ntr['fat_trans'] / $ntr['weight'] * 100, 1);?> g</dd>
				<dt><?=__('Cholesterol');?></dt>
					<dd><?=Num::round($ntr['cholestrol'] / $ntr['weight'] * 100, 1);?> mg</dd>
					<dd class="p"><?=Num::round($ntr['cholestrol'] / $ntr['weight'] * 100/300*100);?> %</dd>
				<dt><?=__('Sodium');?></dt>
					<dd><?=Num::round($ntr['sodium'] / $ntr['weight'] * 100, 1);?> mg</dd>
					<dd class="p"><?=Num::round($ntr['sodium'] / $ntr['weight'] * 100 / 2400 * 100);?> %</dd>
				<dt><?=__('Total Carbohydrate');?></dt>
					<dd><?=Num::round($ntr['carbohydrate'] / $ntr['weight'] * 100, 1);?> g</dd>
					<dd class="p"><?=Num::round($ntr['carbohydrate'] / $ntr['weight'] * 100 / 300 * 100);?> %</dd>
				<dt class="inset"><?=__('Dietary Fiber');?></dt>
					<dd><?=Num::round($ntr['dietary_fiber'] / $ntr['weight'] * 100, 1);?> g</dd>
					<dd class="p"><?=Num::round($ntr['dietary_fiber'] / $ntr['weight'] * 100 / 25 * 100);?> %</dd>
				<dt class="inset"><?=__('Sugars');?></dt>
					<dd><?=Num::round($ntr['sugars'] / $ntr['weight'] * 100, 1);?> g</dd>
				<dt><?=__('Protein');?></dt>
					<dd><?=Num::round($ntr['protein'] / $ntr['weight'] * 100, 1);?> g</dd>
					<dd class="p"><?=Num::round($ntr['protein'] / $ntr['weight'] * 100 / 50 * 100);?> %</dd>
			</dl>
			<div class="clearfix"></div>
			<hr>
			<dl>
				<dt><?=__('Vitamin A');?></dt>
					<dd class="p"><?=Num::round($ntr['vitamin_a'] / $ntr['weight'] * 100, 1);?> %</dd>
				<dt><?=__('Vitamin C');?></dt>
					<dd class="p"><?=Num::round($ntr['vitamin_c'] / $ntr['weight'] * 100, 1);?> %</dd>
				<dt><?=__('Calcium');?></dt>
					<dd class="p"><?=Num::round($ntr['calcium'] / $ntr['weight'] * 100, 1);?> %</dd>
				<dt><?=__('Iron');?></dt>
					<dd class="p"><?=Num::round($ntr['iron'] / $ntr['weight'] * 100, 1);?> %</dd>
			</dl>
			<div class="clearfix"></div>
		</div>
	</div>
</div>