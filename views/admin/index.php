<h1>Admin tools</h1>
<!--
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

-->

<?=BS::button(HTML::anchor('http://google.com', BS::icon('star', BS::WHITE).' Lorem barem'), BS::SUCCESS, BS::LARGE);?>
 <?=BS::button('Test Button '.BS::icon('star', BS::WHITE), BS::INFO, array('type' => 'submit'));?>
<hr>

<?=BS::toolbar(
	BS::group('btn', BS::TOGGLE_RADIO, array(
		BS::button('Left', BS::PRIMARY),
		BS::button('Middle', BS::PRIMARY),
		BS::button('Right', BS::PRIMARY)
)));?>

<hr>

<?=BS::group('btn', array(
	BS::button('Dropdown'.BS::icon('caret'), BS::DANGER, BS::DROPDOWN),
	BS::links(BS::DROPDOWN, array(
		array('Foobar', '#'),
		array('Barfoo', '#')
	))
));?>


<?=BS::group('btn', array(
	BS::button('Split Dropdown', BS::DANGER),
	BS::button(BS::CARET, BS::DANGER, BS::DROPDOWN),
	BS::links(BS::DROPDOWN, array(
		array('Foobar', '#'),
		array('Barfoo', '#'),
		array(BS::DIVIDER),
		array('Lorem ipsum', '#')
	))
));?>

<hr>

<?=BS::progress(10);?>
<?=BS::progress(BS::STRIPED, BS::ACTIVE, array(
	array(10, BS::DANGER),
	array(20, BS::WARNING)
));

