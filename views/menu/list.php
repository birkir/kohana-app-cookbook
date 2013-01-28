<h2><?=__('Menu');?></h2>
<table class="table table-striped table-fixed-header">
	<thead class="header">
		<tr>
			<th><?=__('Name');?></th>
			<th><?=__('Views');?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($items as $item): ?>
			<tr>
				<td><a href="/menu/detail/<?=$item->id;?>"><?=$item->name;?></a></td>
				<td><?=$item->views;?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php if ($user->logged_in()): ?>
	<a href="/menu/create" class="btn btn-primary"><?=__('Add menu');?></a>
<?php endif; ?>

<p class="text-warning">
	<strong>ATH</strong><br />
	Þetta er í prófunarstigi. Ætlunin er að geta sett saman matseðil fyrir vikuna, og prentað út þau hráefni sem til þarf!
</p>
