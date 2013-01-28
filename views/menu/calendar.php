<table class="table table-bordered table-calendar">
	<thead>
		<tr>
			<th><?=UTF8::ucfirst(__('monday'));?></th>
			<th><?=UTF8::ucfirst(__('tuesday'));?></th>
			<th><?=UTF8::ucfirst(__('wednesday'));?></th>
			<th><?=UTF8::ucfirst(__('thirsday'));?></th>
			<th><?=UTF8::ucfirst(__('friday'));?></th>
			<th><?=UTF8::ucfirst(__('saturday'));?></th>
			<th><?=UTF8::ucfirst(__('sunday'));?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
<?php for ($i = 1; $i < $calendar['first_day_of_month']; $i++): ?>
			<td class="disabled"></td>
<?php endfor; ?>
<?php for ($x = 1; $x <= $calendar['days_in_month']; $x++): ?>
<?php if ($i === 8): $i = 1; ?>
		</tr>
		<tr>
<?php endif; ?>
			<td<?php if ($x == $calendar['day']): ?> class="today"<?php endif; ?>>
				<span class="day"><?=$x;?></span><br />
				<?php $d = $calendar['year'].'-'.$calendar['month'].'-'.str_pad($x, 2, '0', STR_PAD_LEFT); ?>
				<?php if (isset($recipes[$d])): $_item = $recipes[$d]; ?>
				<a href="/recipe/detail/<?=$item->id;?>"><?=$_item->name;?></a><br />
				Fyrir <?=$_item->serving;?><br />
				<?php endif; ?>
			</td>
<?php $i++; endfor; ?>
<?php for ($i; $i <= 7; $i++): ?>
			<td class="disabled"></td>
<?php endfor; ?>
		</tr>
	</tbody>
</table>

<a href="/menu/grocerylist/<?=$item->id;?>" class="btn btn-large btn-primary"><?=__('View grocery list');?></a>