<h3><?=($item->loaded() ? __('Edit').' '.$item->name : __('New ingredient'));?></h3>
<?=Form::open();?>
	<div class="row-fluid">
<?php if ($item->loaded()): ?>
		<div class="control-group span3">
			<?=Form::label('ingredientId', __('ID'), array('class' => 'control-label'));?>
			<div class="controls">
				<input type="text" value="<?=$item->id;?>" disabled>
			</div>
		</div>
<?php endif; ?>
		<div class="control-group<?=(isset($errors['name']) ? ' error' : NULL);?> span3">
			<label for="ingredientName" class="control-label"><?=__('Name');?></label>
			<div class="controls">
				<div class="input-append">
					<input type="text" name="name" value="<?=($item->loaded() ? $item->name : Arr::get($_POST, 'name'));?>" id="ingredientName" autocomplete="off">
					<button class="btn fatsecret-toggle" type="button" data-toggle="button"><span class="icon-globe"></span></button>
				</div>
				<input type="text" name="name_is" value="<?=($item->loaded() ? $item->name_is : Arr::get($_POST, 'name_is'));?>" id="ingredientNameIS" autocomplete="off" placeholder="á íslensku">
			</div>
			<?=(isset($errors['name']) ? '<span class="help-block">'.$errors['name'].'</span>' : NULL);?>
		</div>
		<div class="control-group<?=(isset($errors['unit_id']) ? ' error' : NULL);?> span3">
			<label for="ingredientUnit" class="control-label"><?=__('Unit');?></label>
			<div class="controls">
				<?=Form::select('unit_id', array_map('__', ORM::factory('Unit')->find_all()->as_array('id', 'name')), ($item->loaded() ? $item->unit_id : Arr::get($_POST, 'unit_id'))); ?>
			</div>
			<?=(isset($errors['unit']) ? '<span class="help-block">'.$errors['unit'].'</span>' : NULL);?>
		</div>
		<div class="control-group<?=(isset($errors['group_id']) ? ' error' : NULL);?> span3">
			<label for="ingredientGroup" class="control-label"><?=__('Group');?></label>
			<div class="controls">
				<select name="group_id" id="ingredientGroup">
					<?php foreach ($groups as $group): ?>
						<optgroup label="<?=UTF8::ucfirst(__($group->name));?>">
						<?php foreach ($group->subgroup->order_by('id', 'ASC')->find_all() as $subgroup): ?>
							<option value="<?=$subgroup->id;?>"<?php if ($item->group_id == $subgroup->id): ?> selected="selected"<?php endif;?>> &nbsp;- &nbsp;<?=UTF8::ucfirst(__($subgroup->name));?></option>
						<?php endforeach; ?>
						</optgroup>
					<?php endforeach; ?>
				</select>
				<input type="text" name="paleo_scale" value="<?=($item->loaded() ? $item->paleo_scale : Arr::get($_POST, 'paleo_scale'));?>" id="ingredientPaleoScale" autocomplete="off" placeholder="Paleo Skali">
			</div>
		</div>
	</div>
	<hr>
	<div class="row-fluid">
<?php $i = 1; foreach ($num_fields as $name => $clean): $i++; ?>
	<div class="control-group<?=(isset($errors[$name]) ? ' error' : NULL);?> span3">
		<label for="ingredient<?=ucfirst($name);?>" class="control-label"><?=__($clean);?></label>
		<div class="controls">
			<input type="text" name="<?=$name;?>" value="<?=($item->loaded() ? $item->{$name} : Arr::get($_POST, $name));?>" id="ingredient<?=ucfirst($name);?>">
		</div>
		<?=(isset($errors[$name]) ? '<span class="help-block">'.$errors[$name].'</span>' : NULL);?>
	</div>
	<?=($i % 4 == 1 ? '</div><div class="row-fluid">' : NULL);?>
<?php endforeach; ?>
	</div>
	<button type="submit" class="btn btn-large btn-primary"><?=__('Save');?></button>
	<a href="/ingredient" class="btn"><?=__('Go Back');?></a>
<?=Form::close();?>