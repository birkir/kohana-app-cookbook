<?php if ($success): ?>
<h1>Takk!</h1>
<p>Farið verður yfir uppskriftina eins og hún verður virkjuð eins flótt og auðið er.</p>
<?php else: ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
	<div class="control-group<?=Form::has_error($errors, 'name');?>">
		<?=Form::label('recipeName', __('Name'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('name', Form::value($item, 'name'), array('id' => 'recipeName'));?>
		</div>
		<?=Form::helper($errors, 'name');?>
	</div>
	<div class="control-group">
		<label for="recipePhoto" class="control-label"><?=__('Photo');?></label>
		<div class="controls">
			<input type="file" id="recipePhoto" name="photo">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"><?=__('Ingredients');?></label>
		<div class="controls grid ingredients-template hidden">
			<div class="input-append unitize">
				<input class="span1 typeunit" type="text" name="amount[]" placeholder="<?=__('Amount');?>">
				<input type="hidden" name="unit[]" value="" data-unit="" class="hiddenunit">
				<div class="btn-group">
					<button class="btn dropdown-toggle" data-toggle="dropdown">
						<?=__('Unit');?>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
<?php foreach (ORM::factory('Unit')->find_all() as $unit): ?>
						<li><a href="#<?=$unit->id;?>"><?=__($unit->short);?></a></li>
<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<input type="hidden" name="ingredient[]" class="hideingredient">
			<input type="text" class="span2 typeahead-ingredient" placeholder="<?=__('Ingredient');?>" data-provide="typeahead">
			<input type="text" class="span2" name="note[]" placeholder="<?=__('Note');?>">
			<a href="#" class="btn btn-danger remove-ingredient" rel="tooltip" title="<?=__('Remove ingredient row');?>">-</a>
			<a href="#" class="btn btn-success ingredients-add-row" rel="tooltip" title="<?=__('Add ingredient row');?>">+</a>
		</div>
		<div class="dynamic-ingredients">
			<?php foreach ($item->all_ingredients() as $ingredient): ?>
				<?php $unit = ORM::factory('Unit', $ingredient->unit); ?>
				<div class="controls grid ingredients-template">
					<div class="input-append unitize">
						<input class="span1 typeunit" type="text" name="amount[]" value="<?=Num::round($ingredient->amount,2);?> <?=__($unit->short);?>">
						<input type="hidden" name="unit[]" value="<?=$unit->id;?>" data-unit="<?=__($unit->short);?>" class="hiddenunit">
						<div class="btn-group">
							<button class="btn dropdown-toggle" data-toggle="dropdown">
								<?=__('Unit');?>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
<?php foreach (ORM::factory('Unit')->find_all() as $unit): ?>
								<li><a href="#<?=$unit->id;?>"><?=__($unit->short);?></a></li>
<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<input type="hidden" name="ingredient[]" value="<?=$ingredient->id;?>" class="hideingredient">
					<input type="text" class="span2 typeahead-ingredient" placeholder="<?=__('Ingredient');?>" data-provide="typeahead" value="<?=$ingredient->name_is;?>">
					<input type="text" class="span2" name="note[]" placeholder="<?=__('Note');?>" value="<?=$ingredient->note;?>">
					<a href="#" class="btn btn-danger remove-ingredient" rel="tooltip" title="<?=__('Remove ingredient row');?>">-</a>
					<a href="#" class="btn btn-success ingredients-add-row" rel="tooltip" title="<?=__('Add ingredient row');?>">+</a>
					<div class="icon-resize-vertical"></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	
	<div class="control-group<?=Form::has_error($errors, 'description');?>">
		<?=Form::label('recipeDescription', __('Description'), array('class' => 'control-label'));?>
		<div class="controls">
			<textarea name="description" id="recipeDescription" class="textarea wysiwyg input-block-level" rows="10"><?=Form::value($item, 'description');?></textarea>
		</div>
		<?=Form::helper($errors, 'description');?>
	</div>

	<div class="control-group<?=Form::has_error($errors, 'preptime');?>">
		<?=Form::label('recipePreptime', __('Preperation time'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('preptime', Form::value($item, 'preptime'), array('id' => 'recipePreptime', 'class' => 'input-medium'));?> min
		</div>
		<?=Form::helper($errors, 'preptime');?>
	</div>

	<div class="control-group<?=Form::has_error($errors, 'cooktime');?>">
		<?=Form::label('recipeCooktime', __('Cook time'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('cooktime', Form::value($item, 'cooktime'), array('id' => 'recipeCooktime', 'class' => 'input-medium'));?> min
		</div>
		<?=Form::helper($errors, 'cooktime');?>
	</div>

	<div class="control-group<?=Form::has_error($errors, 'serving_size');?>">
		<?=Form::label('recipeServingSize', __('Serves'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('serving_size', Form::value($item, 'serving_size'), array('id' => 'recipeServingSize', 'class' => 'input-medium'));?> <?=__('people');?>
		</div>
		<?=Form::helper($errors, 'serving_size');?>
	</div>

	<div class="control-group<?=Form::has_error($errors, 'source');?>">
		<?=Form::label('recipeSource', __('Source'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('source', Form::value($item, 'source'), array('id' => 'recipeSource', 'class' => 'input-block-level'));?>
		</div>
		<?=Form::helper($errors, 'source');?>
	</div>

	<div class="control-group<?=Form::has_error($errors, 'tags');?>">
		<?=Form::label('recipeTags', __('Tags'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('tags', Form::value($item, 'tags'), array('id' => 'recipeTags', 'class' => 'input-block-level'));?>
		</div>
		<?=Form::helper($errors, 'tags');?>
	</div>

	<div class="control-group">
		<label for="recipeCategories" class="control-label"><?=__('Categories');?></label>
		<div class="controls">
			<div class="row" style="margin-left: -28px;float: left;">
<?php foreach (ORM::factory('Category')->find_all() as $i => $category): ?>
				
				<div class="span2">
					<label for="recipeCategory<?=$category->id;?>" class="checkbox">
						<input type="checkbox" id="recipeCategory<?=$category->id;?>" name="category[]" value="<?=$category->id;?>" <?php if ($item->has('categories', $category)): ?> checked="checked"<?php endif; ?>>
						<?=__($category->name);?>
					</label>
				</div>
<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-primary"><?=__('Save recipe');?></button>
		</div>
	</div>
</form>
<?php endif; ?>