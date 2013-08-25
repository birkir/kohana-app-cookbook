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
	<div class="control-group" style="position: relative;">
		<a href="#instructions" role="button" class="btn btn-info" data-toggle="modal" style="position: absolute; right: 0;">Leiðbeiningar</a>
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
			<input type="text" class="span2 inote" name="note[]" placeholder="<?=__('Note');?>">
			<a href="#" class="btn btn-danger remove-ingredient" rel="tooltip" title="<?=__('Remove ingredient row');?>">-</a>
			<a href="#" class="btn btn-success ingredients-add-row" rel="tooltip" title="<?=__('Add ingredient row');?>">+</a>
		</div>
		<div id="instructions" data-backdrop="true" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 350px; position: absolute; margin-left: -370px; width: 918px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Leiðbeiningar</h3>
			</div>
			<div class="modal-body">
				<div class="step step1">
					<p>Hér setur þú inn magn þess hráefnis sem þú ætlar að skrá niður.</p>
					<p>Kerfið skilur bara einingar með aukastöfum, þannig ef þú vilt t.d. 2 og 1/4 bolla, skráir þú 2.25</p>
					<a href="javascript:App.instructions.step(2);" class="btn btn-primary pull-right">Næsta</a>
				</div>
				<div class="step step2 hide">
					<p>Hér velur þú þá mælieiningu sem þú vilt nota.</p>
					<p>Við viljum benda á að SI einingakerfið er nákvæmast, þeas. grömm og millilítrar.</p>
					<p>Öll stykki eru mæld í miðlungs stóru. Þeas. 1 stk gulrót er meðalstór gulrót.</p>
					<a href="javascript:App.instructions.step(3);" class="btn btn-primary pull-right" style="margin-left: 10px;">Næsta</a>
					<a href="javascript:App.instructions.step(1);" class="btn btn-primary pull-right">Fyrri</a>
				</div>
				<div class="step step3 hide">
					<p>Hér slærð þú inn hráefnið sem þú vilt nota. T.d. BANANI</p>
					<p>Þú <strong>verður</strong> svo að velja hráefnið úr listanum.</p>
					<p>Ef hráefnið þitt kemur ekki fyrir, verður að setja það handvirkt inn í kerfið.</p>
					<a href="javascript:App.instructions.step(4);" class="btn btn-primary pull-right" style="margin-left: 10px;">Næsta</a>
					<a href="javascript:App.instructions.step(2);" class="btn btn-primary pull-right">Fyrri</a>
				</div>
				<div class="step step4 hide">
					<p>Hér getur þú slegið inn t.d. NIÐURSKORNIR, SAXAÐIR eða VEL ÞROSKAÐIR.</p>
					<p>Við mælum ekki með því að slá inn t.d. EÐA MÖNDLUR, STÓRIR eða LITLIR.</p>
					<a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-success pull-right" style="margin-left: 10px;">Loka</a>
					<a href="javascript:App.instructions.step(3);" class="btn btn-primary pull-right">Fyrri</a>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		</script>
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
					<input type="text" class="span2 inote" name="note[]" placeholder="<?=__('Note');?>" value="<?=$ingredient->note;?>">
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
		<?=Form::label('recipeServingSize', __('Magn'), array('class' => 'control-label'));?>
		<div class="controls">
			<?=Form::input('serving_size', Form::value($item, 'serving_size'), array('id' => 'recipeServingSize', 'class' => 'input-small'));?>
			<?=Form::input('serving_type', Form::value($item, 'serving_type'), array('id' => 'recipeServingType', 'class' => 'input-medium', 'placeholder' => 'manns'));?>
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