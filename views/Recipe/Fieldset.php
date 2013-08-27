<nav class="navbar navbar-toolbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-toolbar-ex1-collapse">
			<span class="sr-only"><?=__('Toggle navigation');?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<span class="navbar-brand"><?=__($form->model->loaded() ? 'Edit recipe' : 'Create recipe');?></span>
	</div>

	<?php if ($user->logged_in('admin')): ?>
		<div class="collapse navbar-collapse navbar-toolbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#instructions" data-toggle="modal"><?=__('Tutorial');?></a></li>
				<li><a href="/Recipe/Detail/<?=$form->model->id;?>"><?=__('Go back');?></a></li>
			</ul>
		</div>
	<?php endif; ?>
</nav>

<?=$form;?>

<div class="well">

	<?=$form->open(NULL, ['method' => 'post', 'role' => 'form', 'class' => 'form-horizontal']);?>

		<div class="form-group<?=$form->has('name');?>">
			<?=Form::label('recipeName', __('Name'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<?=Form::input('name', $form->value('name'), ['class' => 'form-control', 'id' => 'recipeName']);?>
			</div>
			<?=$form->helper('name');?>
		</div>

		<div class="form-group<?=$form->has('photo');?>">
			<?=Form::label('recipePhoto', __('Photo'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<?=Form::file('photo', NULL, ['class' => 'form-control', 'id' => 'recipePhoto']);?>
			</div>
			<?=$form->helper('photo');?>
		</div>

		<!-- TUTORIAL MODAL -->
		<div id="instructions" data-backdrop="false" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Leiðbeiningar</h3>
					</div>
					<div class="modal-body">
						<h4>Amount</h4>
						<p>Hér setur þú inn magn þess hráefnis sem þú ætlar að skrá niður.</p>
						<p>Kerfið skilur bara einingar með aukastöfum, þannig ef þú vilt t.d. 2 og 1/4 bolla, skráir þú 2.25</p>

						<h4>Unit</h4>
						<p>Hér velur þú þá mælieiningu sem þú vilt nota.</p>
						<p>Við viljum benda á að SI einingakerfið er nákvæmast, þeas. grömm og millilítrar.</p>
						<p>Öll stykki eru mæld í miðlungs stóru. Þeas. 1 stk gulrót er meðalstór gulrót.</p>

						<h4>Ingredient</h4>
						<p>Hér slærð þú inn hráefnið sem þú vilt nota. T.d. BANANI</p>
						<p>Þú <strong>verður</strong> svo að velja hráefnið úr listanum.</p>
						<p>Ef hráefnið þitt kemur ekki fyrir, verður að setja það handvirkt inn í kerfið.</p>

						<h4>Note</h4>
						<p>Hér getur þú slegið inn t.d. NIÐURSKORNIR, SAXAÐIR eða VEL ÞROSKAÐIR.</p>
						<p>Við mælum ekki með því að slá inn t.d. EÐA MÖNDLUR, STÓRIR eða LITLIR.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- INGREDIENTS CONTROL -->
		<div class="form-group">
			<?=Form::label('recipeIngredients', __('Ingredients'), ['class' => 'col-lg-2 col-sm-2 col-xs-12 control-label']);?>
			<div class="col-lg-2 col-sm-3 col-xs-4" style="padding-right: 0;">
				<div class="input-group">
					<?=Form::input('amount[]', NULL, ['class' => 'form-control', 'placeholder' => __('Amount')]);?>
					<div class="input-group-btn" style="width: 40%; min-width: 10px;">
						<select name="unit[]" class="form-control">
							<?php foreach (ORM::factory('Unit')->find_all() as $unit): ?>
								<option value="<?=$unit->id;?>"><?=__($unit->short);?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-2 col-xs-3" style="padding-left: 5px; padding-right: 0;">
				<?=Form::input('ingredient[]', NULL, ['class' => 'form-control', 'placeholder' => __('Ingredient')]);?>
			</div>
			<div class="col-lg-2 col-sm-2 col-xs-2" style="padding-left: 5px; padding-right: 0;">
				<?=Form::input('note[]', NULL, ['class' => 'form-control', 'placeholder' => __('Note')]);?>
			</div>
			<div class="col-lg-2 col-sm-2 col-xs-3" style="padding-left: 5px; padding-right: 0">
				<div class="btn-group">
					<a href="#" class="btn btn-danger btn-sm remove-ingredient" rel="tooltip" title="<?=__('Remove ingredient row');?>">-</a>
					<a href="#" class="btn btn-success btn-sm ingredients-add-row" rel="tooltip" title="<?=__('Add ingredient row');?>">+</a>
				</div>
			</div>
		</div>
				
		<div class="form-group<?=$form->has('description');?>">
			<?=Form::label('recipeDescription', __('Description'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<?=Form::textarea('description', $form->value('description'), ['class' => 'wysiwyg form-control', 'id' => 'recipeDescription']);?>
			</div>
			<?=$form->helper('description');?>
		</div>

		<div class="form-group<?=$form->has('preptime');?>">
			<?=Form::label('recipePreptime', __('Preperation time'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<div class="input-group">
					<?=Form::input('preptime', $form->value('preptime'), ['class' => 'form-control', 'id' => 'recipePreptime']);?>
					<div class="input-group-addon">min</div>
				</div>
			</div>
			<?=$form->helper('preptime');?>
		</div>

		<div class="form-group<?=$form->has('cooktime');?>">
			<?=Form::label('recipeCooktime', __('Cook time'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<div class="input-group">
					<?=Form::input('cooktime', $form->value('cooktime'), ['class' => 'form-control', 'id' => 'recipeCooktime']);?>
					<div class="input-group-addon">min</div>
				</div>
			</div>
			<?=$form->helper('cooktime');?>
		</div>

		<div class="form-group<?=$form->has('serving_size');?>">
			<?=Form::label('recipeServingSize', __('Amount'), ['class' => 'col-lg-2 col-sm-2 col-xs-12 control-label']);?>
			<div class="col-lg-1 col-sm-2 col-xs-6" style="padding-right: 5px">
				<?=Form::input('serving_size', $form->value('serving_size'), ['class' => 'form-control', 'id' => 'recipeServingSize']);?>
			</div>
			<div class="col-lg-1 col-sm-2 col-xs-6" style="padding-left: 0">
				<?=Form::input('serving_type', $form->value('serving_type'), ['class' => 'form-control', 'id' => 'recipeServingType', 'placeholder' => 'people']);?>
			</div>
			<?=$form->helper('serving_size');?>
			<?=$form->helper('serving_type');?>
		</div>

		<div class="form-group<?=$form->has('source');?>">
			<?=Form::label('recipeSource', __('Source'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<?=Form::input('source', $form->value('source'), ['class' => 'form-control', 'id' => 'recipeSource']);?>
			</div>
			<?=$form->helper('source');?>
		</div>

		<div class="form-group<?=$form->has('tags');?>">
			<?=Form::label('recipeTags', __('Tags'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-sm-8">
				<?=Form::input('tags', $form->value('tags'), ['class' => 'form-control', 'id' => 'recipeTags']);?>
			</div>
			<?=$form->helper('tags');?>
		</div>

		<div class="form-group<?=$form->has('categories');?>">
			<?=Form::label('recipeCategories', __('Categories'), ['class' => 'col-lg-2 col-sm-2 control-label']);?>
			<div class="col-lg-7 col-md-7 col-sm-8">
				<div class="row">
					<?php foreach (ORM::factory('Category')->find_all() as $i => $category): ?>
						<div class="col-xs-6 col-lg-3 col-sm-3">
							<label for="recipeCategory<?=$category->id;?>" class="checkbox-inline">
								<input type="checkbox" id="recipeCategory<?=$category->id;?>" name="category[]" value="<?=$category->id;?>" <?php if ($form->model->has('categories', $category)): ?> checked="checked"<?php endif; ?>>
								<?=__($category->name);?>
							</label>
						</div>
						<?=($i+1) % 4 == 0 ? '</div><div class="row">' : NULL;?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-7 col-lg-offset-2 col-sm-6 col-sm-offset-2">
				<button type="submit" class="btn btn-primary col-xs-12 col-sm-4 col-md-3"><?=__('Save recipe');?></button>
			</div>
		</div>

	<?=$form->close();?>

</div>