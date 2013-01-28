<h1>Admin tools</h1>

<table class="table table-striped table-fixed-header">
	<thead>
		<tr>
			<th>Feature</th>
			<th>Output</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th colspan="2">Recipes</th>
		</tr>
		<tr>
			<td>No categories</td>
			<td>
			<?php echo DB::select(DB::expr('COUNT(*)'))
			->from('recipes')
			->where(DB::select(DB::expr('COUNT(*)'))->from('recipe_category')->where('recipe_category.recipe_id', '=', DB::expr('recipes.id')), '=', 0)
			->execute()->get('COUNT(*)'); ?>
			</td>
		</tr>
		<tr>
			<td>No ingredients</td>
			<td>
			<?php echo DB::select(DB::expr('COUNT(*)'))
			->from('recipes')
			->where(DB::select(DB::expr('COUNT(*)'))->from('recipe_ingredient')->where('recipe_ingredient.recipe_id', '=', DB::expr('recipes.id')), '=', 0)
			->execute()->get('COUNT(*)'); ?>
			</td>
		</tr>
		<tr>
			<td>No photo</td>
			<td>
			<?=ORM::factory('Recipe')->where('photo', 'IS', NULL)->count_all();?>
			</td>
		</tr>
		<tr>
			<td>Not public</td>
			<td>
			<?=ORM::factory('Recipe')->where('public', '=', 0)->count_all();?>
			</td>
		</tr>
	</tbody>
</table>