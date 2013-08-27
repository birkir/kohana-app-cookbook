<nav class="navbar navbar-toolbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-toolbar-ex1-collapse">
			<span class="sr-only"><?=__('Toggle navigation');?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<span class="navbar-brand"><?=__($form->model->loaded() ? 'Edit ingredient' : 'Create ingredient');?></span>
	</div>
	<div class="collapse navbar-collapse navbar-toolbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="/Ingredient"><?=__('Go back');?></a></li>
		</ul>
	</div>
</nav>

<?=$form;?>

<div class="well">

	<?=$form->open(NULL, ['method' => 'post', 'role' => 'form']);?>

		<div class="row">

			<div class="col-lg-3 col-sm-6 form-group<?=$form->has('name');?>">
				<div class="form-group">
					<?=Form::label('ingredientName', __('Name'), ['class' => 'control-label']);?>
					<div class="input-group input-group-sm">
						<?=Form::input('name', $form->value('name'), ['autocomplete' => 'off', 'class' => 'form-control', 'id' => 'ingredientName']);?>
						<span class="input-group-btn">
							<button class="btn btn-default fatsecret-toggle" type="button" data-toggle="button">
								<span class="icon-globe"></span>
							</button>
						</span>
					</div>
				</div>
				<?=Form::input('name_is', $form->value('name_is'), ['id' => 'ingredientNameIS', 'autocomplete' => 'off', 'placeholder' => 'á íslensku', 'class' => 'form-control input-sm']);?>
				<?=$form->helper('name');?>
			</div>

			<div class="col-lg-3 col-sm-3">
				<div class="form-group">
					<?=Form::label('ingredientUnit', __('Unit'), ['class' => 'control-label']);?>
					<?=Form::select('unit_id', array_map('__', ORM::factory('Unit')->find_all()->as_array('id', 'name')), $form->value('unit_id'), ['class' => 'form-control', 'id' => 'ingredientUnit']);?>
					<?=$form->helper('unit_id');?>
				</div>
			</div>

			<div class="col-lg-3 col-sm-3">
				<div class="form-group">
					<?=Form::label('ingredientGroup', __('Group'), ['class' => 'control-label']);?>
					<select name="group_id" id="ingredientGroup" class="form-control">
						<?php foreach ($groups as $group): ?>
							<optgroup label="<?=UTF8::ucfirst(__($group->name));?>">
								<?php foreach ($group->subgroup->order_by('id', 'ASC')->find_all() as $subgroup): ?>
									<option value="<?=$subgroup->id;?>"<?php if ($form->model->group_id == $subgroup->id): ?> selected="selected"<?php endif;?>> &nbsp;- &nbsp;<?=UTF8::ucfirst(__($subgroup->name));?></option>
								<?php endforeach; ?>
							</optgroup>
						<?php endforeach; ?>
					</select>
				</div>
				<?=Form::input('paleo_scale', $form->value('paleo_scale'), ['id' => 'ingredientPaleoScale', 'autocomplete' => 'off', 'placeholder' => __('Paleo scale'), 'class' => 'form-control']);?>
			</div>
		</div>

		<div class="row">

			<?php $i = 1; foreach ($num_fields as $name => $clean): $i++; ?>
				<div class="col-lg-3 col-sm-3 form-group<?=$form->has($name);?>">
					<?=Form::label('ingredient'.UTF8::ucfirst($name), __($clean), ['class' => 'control-label']);?>
					<?=Form::input($name, $form->value($name), ['id' => 'igredient'.UTF8::ucfirst($name), 'class' => 'form-control']);?>
					<?=$form->helper($name);?>
				</div>
				<?=($i % 4 == 1 ? '</div><div class="row">' : NULL);?>
			<?php endforeach; ?>

		</div>

		<button type="submit" class="btn btn-large btn-primary"><?=__($form->model->loaded() ? 'Save changes' : 'Create ingredient');?></button>

	<?=$form->close();?>

</div>