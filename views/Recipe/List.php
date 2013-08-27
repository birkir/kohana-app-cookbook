<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-4">
		<?=Form::open(NULL, array('class' => 'well', 'id' => 'recipe-search'));?>
			<fieldset>
				<div class="form-group">
					<?=Form::label('searchterm', __('Search term'), ['class' => 'control-label']);?>
					<?=Form::input('searchterm', Arr::get($q, 'searchterm', NULL), ['class' => 'form-control']);?>
				</div>
				<div class="form-group">
					<?=Form::label('categories', __('Categories'));?>
					<div class="row">
						<?php foreach (ORM::factory('Category')->find_all() as $i => $category): ?>
							<div class="col-lg-6 col-xs-6">
								<label for="recipeCategory<?=$category->id;?>" class="checkbox-inline">
									<input type="checkbox" id="recipeCategory<?=$category->id;?>" name="category[]" value="<?=$category->id;?>"<?php if (isset($q['category']) AND in_array($category->id, $q['category'])):?> checked="checked"<?php endif; ?>>
									<?=__($category->name);?>
								</label>
							</div>
							<?=$i % 2 == 1 ? '</div><div class="row">' : NULL;?>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="form-group">
					<label for="recipePreptime" class="slider-label">
						<div class="slider-value pull-right"></div>
						<?=__('Preperation time');?>
					</label>
					<div class="slider preptime" data-form="preptime" data-time="1" data-step="5" data-range="1" data-value="<?=isset($q['preptime'][0])?intval($q['preptime'][0]):0;?>,<?=empty($q['preptime'][1])?60:$q['preptime'][1];?>" data-min="0" data-max="60"></div>
				</div>
				<div class="form-group">
					<label for="recipeCooktime" class="slider-label">
						<div class="slider-value pull-right"></div>
						<?=__('Cook time');?>
					</label>
					<div class="slider cooktime" data-form="cooktime" data-time="1" data-step="5" data-range="1" data-value="<?=isset($q['cooktime'][0])?intval($q['cooktime'][0]):0;?>,<?=empty($q['cooktime'][1])?150:$q['cooktime'][1];?>" data-min="0" data-max="150"></div>
				</div>
				<button type="submit" class="btn btn-primary btn-block"><?=__('Filter recipes');?></button>
			</fieldset>
		<?=Form::close();?>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-8">
		<table class="table table-striped table-bordered">
			<thead class="header">
				<tr>
					<th><?=__('Name');?></th>
					<th class="hidden-xs hidden-sm"><?=__('Preptime');?></th>
					<th class="hidden-xs"><?=__('Cooktime');?></th>
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
							<a href="/recipe/detail/<?=$item->id;?>" data-id="<?=$item->id;?>">
							<img src="/recipe/photo/<?=$item->id;?>/thumb.jpg" alt="" align="left" width="80" style="margin-right: 10px;" />
							<?=$item->name;?></a><br />
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
						<td class="hidden-xs hidden-sm"><?=$item->preptime;?>m</td>
						<td class="hidden-xs"><?=$item->cooktime;?>m</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php if ($user->logged_in()): ?>
			<a href="/Recipe/Create" class="btn btn-large btn-primary"><?=__('Add recipe');?></a>
		<?php endif; ?>
	</div>
</div>