<h3>Leita eftir hráefnum<?php if ($items): ?><a href="/recipe/ihave" class="btn btn-primary pull-right">Leita aftur &raquo;</a><?php endif; ?></h3>
<?php if ($items): ?>
	<br />
	<strong>Hráefni:</strong> <span class="label"><?=implode('</span>, <span class="label">', ORM::factory('Ingredient')->where('id', 'IN', DB::expr('('.Arr::get($_GET, 'q').')'))->find_all()->as_array('id', 'name_is'));?></span>
	<hr>
	<table class="table table-striped recipe-table table-fixed-header">
		<thead class="header">
			<tr>
				<th><?=__('Name');?></th>
				<th><?=__('Preptime');?></th>
				<th colspan="2"><?=__('Cooktime');?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($items as $item): ?>
				<tr>
					<td>
						<a href="/recipe/detail/<?=$item->id;?>" data-id="<?=$item->id;?>"><?=$item->name;?></a><br />
						<?php $n = explode(',', $item->nutritions); ?>
						<?php if (count($n) > 1): ?>
						<small class="muted">
						Orka í 100g: 
						<?=Num::round($n[0]);?> kal,
						<?=Num::round($n[1]);?>g p,
						<?=Num::round($n[2]);?>g f,
						<?=Num::round($n[3]);?>g k.
						</small>
						<?php endif; ?>
					</td>
					<td><?=$item->preptime;?>m</td>
					<td><?=$item->cooktime;?>m</td>
					<td><img src="/recipe/photo/<?=$item->id;?>/80x50cw" alt="" align="right" width="80" /></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<form action="" method="get">
		<input name="q" id="ingredientSearch" type="text" class="input-block-level" />
		<br>
		<button type="submit" class="btn btn-primary btn-large btn-block"><?=__('Search');?></button>
	</form>
<?php endif; ?>