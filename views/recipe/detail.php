<div class="row-fluid">
	<div class="span12">
		<h1><?=$item->name;?></h1>
		<span> <?=isset($_GET['serve'])?$_GET['serve']:$item->serving_size;?> <?=__($item->serving_type);?></span> | <strong><?=__('Preptime');?></strong> <span><?=$item->preptime;?>m</span> | <strong><?=__('Cooktime');?></strong> <span><?=$item->cooktime;?>m</span>
		<div class="btn-group pull-right">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Fyrir <?=isset($_GET['serve'])?$_GET['serve']:$item->serving_size;?> <?=__($item->serving_type);?> <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="?serve=1">1 <?=__($item->serving_type);?></a></li>
			    <li><a href="?serve=2">2 <?=__($item->serving_type);?></a></li>
			    <li><a href="?serve=3">3 <?=__($item->serving_type);?></a></li>
			    <li><a href="?serve=4">4 <?=__($item->serving_type);?></a></li>
			    <li><a href="?serve=5">5 <?=__($item->serving_type);?></a></li>
			    <li><a href="?serve=6">6 <?=__($item->serving_type);?></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<hr>
		<ul>
			<?php foreach ($ingredients as $ingredient): ?>
				<?php if (isset($_GET['serve'])) $ingredient->amount = $ingredient->amount * ($_GET['serve'] / $ntr['weight'] * 100); ?>
				<?php if ( ! isset($last_group) || $last_group !== $ingredient->group): ?>
					</ul><h4><?=UTF8::ucfirst($ingredient->group);?><?=$ingredient->group ? ' '.__('ingredients') : ' '.UTF8::ucfirst(__('ingredients'));?></h4><ul>
				<?php $last_group = $ingredient->group; endif; ?>
				<li rel="tooltip" title="<?=Num::round($ingredient->weight($ingredient->amount, $ingredient->unit),2);?> g" data-placement="left">
					<?=$item::to_fraction($ingredient->amount);?>
					<!--<?=Inflector::plural($units[$ingredient->unit], round($ingredient->amount));?>-->
					<?=__($units[$ingredient->unit]);?>
					<?=$ingredient->name_is;?>
				</li>
			<?php endforeach; ?>
		</ul>
		<hr>
		<h4><?=__('Method');?></h4>
		<?=$item->description;?>
		<br /><br />
		<hr>
		<br>
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
		<fb:comments href="http://paleo.forritun.org/recipe/detail/<?=$item->id;?>" num_posts="1" style="width: 100%;"></fb:comments>
		<style type="text/css">.fb_iframe_widget > span, .fb_iframe_widget > span > iframe { width: 100% !important; }</style>
	</div>
	<div class="span3">
		<br>
		<?php if ($item->photo): ?>
			<a href="/recipe/photo/<?=$item->id;?>/800x600" title="<?=__('Photo');?>" rel="modal">
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