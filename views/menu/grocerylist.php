<table class="table table-bordered">
	<thead>
		<tr>
			<th><?=__('Ingredient');?></th>
			<th><?=__('Amount');?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $ingredient => $list): ?>
		<tr>
			<td><?=__($ingredient);?></td>
			<td>
				<?php foreach ($list as $item): ?>
					<?=Model_Recipe::to_fraction($item['amount']);?> <?=__($item['unit']);?><br />
				<?php endforeach; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>