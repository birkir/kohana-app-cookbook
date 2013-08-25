<h2><?=__('Ingredient');?></h2>
<table class="table table-striped table-fixed-header">
	<thead class="header">
		<tr>
			<th><?=__('Name');?></th>
			<th><?=__('Icelandic');?></th>
			<?php /* <th><?=__('Food group');?></th> */ ?>
			<th><?=__('Paleo scale');?></th>
			<th><?=__('Calories');?></th>
			<th><?=__('Total Carbohydrate');?></th>
			<th><?=__('Protein');?></th>
			<th><?=__('Total Fat');?></th>
			<th><?=__('Sugars');?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($items as $item): ?>
			<tr>
<?php if ($user->logged_in('admin')): ?>
				<td><a href="/ingredient/edit/<?=$item->id;?>"><?=$item->name;?></a></td>
<?php else: ?>
				<td><?=$item->name;?></td>
<?php endif; ?>
				<td><?=$item->name_is;?></td>
				<td>
					<span class="hidden"><?=$item->paleo_scale;?></span>
					<?php for ($i = 0; $i < $item->paleo_scale; $i++): ?>
						<span class="icon-leaf"></span>
					<?php endfor; ?>
				</td>
				<td><?=Num::round($item->calories, 0);?> kcal</td>
				<td><?=Num::round($item->carbohydrate, 2);?> g</td>
				<td><?=Num::round($item->protein, 2);?> g</td>
				<td><?=Num::round($item->fat_total, 2);?> g</td>
				<td><?=Num::round($item->sugars, 2);?> g</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php if ($user->logged_in('admin')): ?>
	<a href="/ingredient/create" class="btn btn-large btn-primary"><?=__('Add ingredient');?></a>
<?php endif; ?>