<div class="nutritions">
	<h2><?=__('Nutrition facts');?></h2>
	<p><?=__('Serving Size');?> <?=Num::round($item['weight'] / $serving, 1);?>g</p>
	<small><strong><?=__('Amount per 100g');?></strong></small><br />
	<strong><?=__('Calories');?></strong> <span><?=Num::round($item['calories'] / $item['weight'] * 100, 1);?></span>
	<hr>
	<dl>
		<dt><?=__('Total Fat');?></dt>
			<dd><?=Num::round($item['fat_total'] / $item['weight'] * 100, 1);?> g</dd>
			<dd class="p"><?=Num::round($item['fat_total']/$serving/65*100);?> %</dd>
		<dt class="inset"><?=__('Saturated Fat');?></dt>
			<dd><?=Num::round($item['fat_saturated'] / $item['weight'] * 100, 1);?> g</dd>
			<dd class="p"><?=Num::round($item['fat_saturated']/$serving/20*100);?> %</dd>
		<dt class="inset"><?=__('Trans Fat');?></dt>
			<dd><?=Num::round($item['fat_trans'] / $item['weight'] * 100, 1);?> g</dd>
		<dt><?=__('Cholesterol');?></dt>
			<dd><?=Num::round($item['cholestrol'] / $item['weight'] * 100, 1);?> mg</dd>
			<dd class="p"><?=Num::round($item['cholestrol'] / $item['weight'] * 100/300*100);?> %</dd>
		<dt><?=__('Sodium');?></dt>
			<dd><?=Num::round($item['sodium'] / $item['weight'] * 100, 1);?> mg</dd>
			<dd class="p"><?=Num::round($item['sodium'] / $item['weight'] * 100 / 2400 * 100);?> %</dd>
		<dt><?=__('Total Carbohydrate');?></dt>
			<dd><?=Num::round($item['carbohydrate'] / $item['weight'] * 100, 1);?> g</dd>
			<dd class="p"><?=Num::round($item['carbohydrate'] / $item['weight'] * 100 / 300 * 100);?> %</dd>
		<dt class="inset"><?=__('Dietary Fiber');?></dt>
			<dd><?=Num::round($item['dietary_fiber'] / $item['weight'] * 100, 1);?> g</dd>
			<dd class="p"><?=Num::round($item['dietary_fiber'] / $item['weight'] * 100 / 25 * 100);?> %</dd>
		<dt class="inset"><?=__('Sugars');?></dt>
			<dd><?=Num::round($item['sugars'] / $item['weight'] * 100, 1);?> g</dd>
		<dt><?=__('Protein');?></dt>
			<dd><?=Num::round($item['protein'] / $item['weight'] * 100, 1);?> g</dd>
			<dd class="p"><?=Num::round($item['protein'] / $item['weight'] * 100 / 50 * 100);?> %</dd>
	</dl>
	<div class="clearfix"></div>
	<hr>
	<dl>
		<dt><?=__('Vitamin A');?></dt>
			<dd class="p"><?=Num::round($item['vitamin_a'] / $item['weight'] * 100, 1);?> %</dd>
		<dt><?=__('Vitamin C');?></dt>
			<dd class="p"><?=Num::round($item['vitamin_c'] / $item['weight'] * 100, 1);?> %</dd>
		<dt><?=__('Calcium');?></dt>
			<dd class="p"><?=Num::round($item['calcium'] / $item['weight'] * 100, 1);?> %</dd>
		<dt><?=__('Iron');?></dt>
			<dd class="p"><?=Num::round($item['iron'] / $item['weight'] * 100, 1);?> %</dd>
	</dl>
	<div class="clearfix"></div>
</div>