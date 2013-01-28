<div class="hero-unit">
  <h1>Paleo Uppskriftir</h1>
  <p>Einfalt og þæginlegt</p>
  <p>
    <a class="btn btn-primary btn-large" href="/recipe">Skoða uppskriftir</a>
  </p>
</div>

<div class="row-fluid">
	<div class="span4">
		<h3>Afhverju?</h3>
		<p>
			Afhverju þessi uppskriftarbók, en ekki einhver önnur?<br /><br />
			Jú, vegna þess að aðrar uppskriftabækur sýna ekki næringarinnihald. Þessi býr hana til sjálfvirkt, út frá næringargildum í hráefnalista.<br /><br />
			Einnig hefurinn hefur það markmið að leiðarljósi, að vera frír fyrir notendur. Ef þér finnst þetta flott verkefni, endilega skráðu þig og deildu uppskrift með öðrum.
		</p>
	</div>
	<div class="span4">
		<h3>Hvernig byrja ég?</h3>
		<p>Þú ferð í Uppskriftir hér að ofan, skoðar það sem er í boði og getur samstundis byrjað að elda, en ef þú vilt bæta við uppskrift, þarft þú að skrá þig inn.</p>
	</div>
	<div class="span4">
		<h3>Nýjasta uppskriftin</h3>
		<?php $recipe = ORM::factory('Recipe')->order_by('id', 'DESC')->limit(1)->find(); ?>
		<a href="/recipe/detail/<?=$recipe->id;?>"><img src="/recipe/photo/<?=$recipe->id;?>/360x100wc" style="width: 90%;" alt="" class="img-polaroid" /></a><br />
		<h4><a href="/recipe/detail/<?=$recipe->id;?>"><?=$recipe->name;?></a></h4>
		<strong>innihald</strong> <?php foreach ($recipe->all_ingredients() as $ingredient): ?><?=$ingredient->name_is;?>, <?php endforeach; ?><br />
		<small class="muted">
		Orka í 100g: 
		<?=Num::round($recipe->calories);?> kal,
		<?=Num::round($recipe->protein);?>g p,
		<?=Num::round($recipe->fat);?>g f,
		<?=Num::round($recipe->carbs);?>g k.
		</small>
	</div>
</div>