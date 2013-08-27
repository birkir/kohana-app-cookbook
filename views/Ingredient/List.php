<nav class="navbar navbar-toolbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-toolbar-ex1-collapse">
			<span class="sr-only"><?=__('Toggle navigation');?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<span class="navbar-brand"><?=__('Ingredients');?></span>
	</div>
	<div class="collapse navbar-collapse navbar-toolbar-ex1-collapse">
		<?php if ($user->logged_in('admin')): ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/Ingredient/Create"><?=__('Create ingredient');?></a></li>
			</ul>
		<?php endif; ?>
	</div>
</nav>

<table class="table table-bordered table-striped">
	<thead class="header">
		<tr>
			<th><?=__('Name');?></th>
			<th class="hidden-xs"><?=__('Icelandic');?></th>
			<th class="hidden-xs"><?=__('Paleo scale');?></th>
			<th class="visible-xs">cal</th>
			<th class="hidden-xs"><?=__('Calories');?></th>
			<th class="visible-xs">carb</th>
			<th class="hidden-xs"><?=__('Total Carbohydrate');?></th>
			<th class="visible-xs">pro</th>
			<th class="hidden-xs"><?=__('Protein');?></th>
			<th class="visible-xs">fat</th>
			<th class="hidden-xs"><?=__('Total Fat');?></th>
			<th class="visible-xs">sug</th>
			<th class="hidden-xs"><?=__('Sugars');?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($items as $item): ?>
			<tr>
				<?php if ($user->logged_in('admin')): ?>
					<td><a href="/Ingredient/Edit/<?=$item->id;?>"><?=$item->name;?></a></td>
				<?php else: ?>
					<td><?=$item->name;?></td>
				<?php endif; ?>
				<td class="hidden-xs"><?=$item->name_is;?></td>
				<td class="hidden-xs">
					<span class="hidden"><?=$item->paleo_scale;?></span>
					<?php for ($i = 0; $i < $item->paleo_scale; $i++): ?>
						<span class="icon-leaf"></span>
					<?php endfor; ?>
				</td>
				<td><?=Num::round($item->calories, 0);?> kcal</td>
				<td><?=Num::round($item->carbohydrate, 1);?> g</td>
				<td><?=Num::round($item->protein, 1);?> g</td>
				<td><?=Num::round($item->fat_total, 1);?> g</td>
				<td><?=Num::round($item->sugars, 1);?> g</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>