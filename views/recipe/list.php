<div class="row-fluid">
	<div class="span3">
		<h4 class="text-info"><?=__('Search recipes');?></h4>
		<?=Form::open(NULL, array('class' => 'well', 'id' => 'recipe-search'));?>
			<fieldset>
				<div class="control-group">
					<?=Form::label('searchterm', __('Search term'), array('class' => 'control-label'));?>
					<div class="controls">
						<?=Form::input('searchterm', NULL, array('class' => 'input-block-level'));?>
					</div>
				</div>
				<div class="control-group">
					<?=Form::label('categories', __('Categories'));?>
					<div class="controls">
						<div class="row-fluid">
<?php foreach (ORM::factory('Category')->find_all() as $i => $category): ?>
							<div class="span6">
								<label for="recipeCategory<?=$category->id;?>" class="checkbox">
									<input type="checkbox" id="recipeCategory<?=$category->id;?>" name="category[]" value="<?=$category->id;?>">
									<?=__($category->name);?>
								</label>
							</div>
							<?=$i % 2 == 1 ? '</div><div class="row-fluid">' : NULL;?>
<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="control-group">
					<label for="recipePreptime" class="slider-label">
						<div class="slider-value pull-right"></div>
						<?=__('Preperation time');?>
					</label>
					<div class="slider preptime" data-form="preptime" data-time="1" data-step="5" data-range="1" data-value="0,60" data-min="0" data-max="60"></div>
				</div>
				<div class="control-group">
					<label for="recipeCooktime" class="slider-label">
						<div class="slider-value pull-right"></div>
						<?=__('Cook time');?>
					</label>
					<div class="slider cooktime" data-form="cooktime" data-time="1" data-step="5" data-range="1" data-value="0,150" data-min="0" data-max="150"></div>
				</div>
				<br>
				<button type="submit" class="btn btn-info btn-block"><?=__('Search');?></button>
			</fieldset>
		<?=Form::close();?>
	</div>
	<div class="span9">
		<table class="table table-striped recipe-table table-fixed-header">
			<thead class="header">
				<tr>
					<th><?=__('Name');?></th>
					<th><?=__('Preptime');?></th>
					<th><?=__('Cooktime');?></th>
					<th></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="3">
						<?php if (count($items) == $limit): ?>
							<button onclick="return App.recipe_search_more(<?=$limit+$offset;?>, true);" class="btn btn-link btn-block">Fleiri uppskriftir</button>
						<?php endif; ?>
					</td>
				</tr>
			</tfoot>
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
<?php if ($user->logged_in()): ?>
		<a href="/recipe/create" class="btn btn-large btn-primary"><?=__('Add recipe');?></a>
<?php endif; ?>
	</div>
</div>