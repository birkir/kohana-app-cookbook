/**
 * Application class
 *
 * @package Cookbook
 * @author Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright (c) 2013
 */
 var App = {

 	table: function ()
 	{
 		/*
 		var table = $(this),
 			thead = table.find('thead'),
 			nthead = thead.clone(),
 			toolbar = table.prev(),
 			topnav = $('.navbar-fixed-top'),
 			fixedContainer = $('<div/>').css({ position: 'fixed', background: '#fff', paddingTop: 10, opacity: 0 }),
 			win = $(window);

 		if ( ! toolbar.hasClass('navbar-toolbar'))
 			return;

 		fixedContainer
 		.append(toolbar.clone())
		.append($('<table/>', { class: table.attr('class') }).css({ margin: 0 }).append(nthead));

 		toolbar.before(fixedContainer);

 		win.on('scroll', function () {
 			if ((win.scrollTop() + topnav.height()) > (toolbar.offset().top + toolbar.height())) {
 				fixedContainer.stop().animate({ opacity: 1 }, 500);
 			} else {
 				fixedContainer.animate({ opacity: 0 }, 500);
 			}
 		});

 		win.on('resize', function () {
 			fixedContainer.css({
	 			top: topnav.height(),
	 			left: toolbar.offset().left,
	 			right: toolbar.offset().left
 			});
 			thead.find('th').each(function () {
 				nthead.find('th').eq($(this).index()).css({ width: $(this).width() + 18 });
 			})
 		})
 		.trigger('resize');
 		*/
 	},

	/** on document ready **/
	ready: function()
	{

		$('table').each(App.table);

		App.recipe_search();
		App.slider_init();
		App.ingredients();
		App.fatsecret_init();
		App.instructions();

		$('textarea.wysiwyg').wysihtml5();

		$('.table-fixed-header').fixedHeader();

		$('[rel=tooltip]').tooltip();

		$('table').tablesorter({
			selectorHeaders: 'thead.header tr th'
		}).on("sortEnd",function(e, t){
			var asc = $(t).find('thead.header .tablesorter-headerAsc').index();
			var desc = $(t).find('thead.header .tablesorter-headerDesc').index();
			$(t).find('thead.header-copy th').removeClass('tablesorter-headerAsc tablesorter-headerDesc');
			if (asc > -1)
				$(t).find('thead.header-copy th:eq('+asc+')').addClass('tablesorter-headerAsc');
			else if (desc > -1)
				$(t).find('thead.header-copy th:eq('+desc+')').addClass('tablesorter-headerDesc');
		});

		$('a[rel=modal]').on('click', function (e){
			e.preventDefault();
			if ( ! document.getElementById('rel_modal'))
			{
				var image = $('<img></img>', {
					'src': $(this).attr('href'),
					'alt': ''
				});
				var rel_modal = $('<div></div>', {
					'class': 'modal hide fade',
					'id': 'rel_modal',
					'style': 'padding-bottom: 5px; width: 800px; top: 300px; margin-left: -400px;',
					'html': $('<div></div>', {
						'class': 'modal-body',
						'style': 'max-height: none;',
						'html': image
					})
				});
				$('body').append(rel_modal);
			}

			$('#rel_modal').modal('show');

			return false;
		});

		$.getJSON('/ingredient', function(data){
			$('#ingredientSearch').tokenInput(data, {
				hintText: 'Sláið inn hráefni',
				noResultsText: 'Ekkert hráefni fannst',
				searchingText: 'Leita...',
				animateDropdown: false,
				resultsLimit: 10,
				preventDuplicates: true,
				tokenFormatter: function (item) {
					return "<li class=\"btn btn-primary\">" + item.name + "</li>";
				},
				resultsFormatter: function(item, obj) {
					return "<li><a>" + item.name + "</a></li>";
				},
				onReady: function(){
					$('#token-input-ingredientSearch').trigger('focus');
				}
			});
		});

	},

	recipe_no_empty: false,

	recipe_search_offset: 0,

	recipe_search_more: function(num, no_empty)
	{
		App.recipe_search_offset = num;
		App.recipe_no_empty = !! no_empty;
		$('#recipe-search').trigger('submit');
	},

	recipe_search: function()
	{
		var lastQuery = '', lastOffset = 0;

		$('#recipe-search').on('submit', function(){

			// lets load ...
			$('.recipe-table tfoot button').remove();
			$('.recipe-table tfoot td').append($('<div></div>', {
				'class': 'loading',
				'style': 'height: 20px;background-position: 50% 50%;'
			}));

			var query = $(this).serialize();

			// clear table for new search parameters
			if (( ! App.recipe_no_empty && query != lastQuery) || (query == lastQuery && App.recipe_search_offset == lastOffset))
			{
				$('.recipe-table tbody').empty();
				App.recipe_search_offset = 0;
			}

			$.getJSON('/recipe/search?' + query + '&offset=' + App.recipe_search_offset, function(data){

				if (data.items.length == data.limit)
				{
					$('.recipe-table tfoot td').append($(document.createElement('button')).addClass('btn btn-block btn-link').text('Fleiri uppskriftir').on('click', function(){
						App.recipe_search_more(data.offset + data.limit, false);
					}));
				}

				$('.recipe-table tfoot td .loading').remove();

				$(data.items).each(function(i, item){
					var n = '<br />Orka í 100g: ', nn = item.nutritions.split(',');
					n += Math.round(nn[0]) + ' kal, ';
					n += Math.round(nn[1]) + 'g p, ';
					n += Math.round(nn[2]) + 'g f, ';
					n += Math.round(nn[3]) + 'g k.';

					var row = $(document.createElement('tr'));
					row.append($('<td></td>', {
						html: $('<a></a>', {
							text: item.name,
							href: '/recipe/detail/' + item.id
						})
					}).append($('<small></small>', {
						'class': 'muted',
						html: n
					}))).append($('<td></td>', {
						class: 'hidden-phone',
						text: Utils.pretty_time(item.preptime)
					})).append($('<td></td>', {
						text: Utils.pretty_time(item.cooktime)
					})).append($('<td></td>', {
						html: $('<img></img>', {
							src: '/recipe/photo/'+item.id+'/80x80',
							alt: '',
							align: 'right'
						})
					}));
					$('.recipe-table tbody').append(row);
				});
				history.pushState(null, null, '/recipe/search/' + data.identifier);
			});

			lastQuery = query;
			lastOffset = App.recipe_search_offset;

			return false;
		});
	},

	slider_init: function()
	{
		if ($.ui)
		{
			$('.slider').each(function(){

				var s = $(this), v = $(this).parent().find('.slider-value');

				var config = {
					animate: true,
					min: parseInt(s.data('min'), 0),
					max: parseInt(s.data('max'), 0)
				};
				
				if (s.data('range'))
				{
					config.range = true;
					var vals = s.data('value').split(',');
					config.values = [parseInt(vals[0], 0), parseInt(vals[1], 0)];
				}

				if (s.data('step'))
				{
					config.step = parseInt(s.data('step'), 0);
				}

				if (s.data('form'))
				{
					config.form = {
						from: $(document.createElement('input')).attr('type', 'hidden').attr('name', s.data('form')+'[0]').val(config.values[0]),
						to: $(document.createElement('input')).attr('type', 'hidden').attr('name', s.data('form')+'[1]').val(config.values[1])
					};
					s.after(config.form.from).after(config.form.to);
				}

				config.slide = function(event, ui)
				{
					if (s.data('time'))
					{
						var xy = '';
						if (ui.values[0] === 0) xy += 'allt að ';
						else xy += Utils.pretty_time(ui.values[0]);
						if (ui.values[0] > 0 && ui.values[1] < config.max) xy += ' til ';
						if (ui.values[1] === config.max) xy += ' og yfir';
						else xy += Utils.pretty_time(ui.values[1]);
						if (ui.values[0] === 0 && ui.values[1] == config.max) xy = 'allt';
						v.text(xy);
					}
					if (s.data('form'))
					{
						config.form.from.val(ui.values[0] === config.min ? '' : ui.values[0]);
						config.form.to.val(ui.values[1] === config.max ? '' : ui.values[1]);
					}
				};
				var slider = s.slider(config);
				slider.slider('option', 'slide').call(slider, null, { values: s.slider("values") });
			});
		}
	},

	fatsecret_init: function()
	{
		$('#ingredientName').typeahead({
			ajax: {
				url: '/ingredient/fs_search',
				method: 'get',
				preProcess: function(data){ return JSON.parse(data); },
				loadingClass: 'loading'
			},
			itemSelected: function(el, id, text){
				App.fatsecret(id);
				$('.fatsecret-toggle').trigger('click');
				$('#ingredientName').val(text.toLowerCase());
			},
			lookup: function(){
				if ($('.fatsecret-toggle').hasClass('active'))
					this.ajaxer();
			},
			display: 'food_name',
			val: 'food_id'
		});

		$('.fatsecret-toggle').on('click', function(){
			if ( ! $(this).hasClass('active'))
			setTimeout(function(){
				$('#ingredientName').trigger('focus').trigger('keyup');
			}, 33);
		});
	},

	fatsecret: function(id)
	{
		$.getJSON('/ingredient/fs_get/' + id, function(result){

			var servings = result.food.servings.serving;
			var item = servings, cup = null, servs = [], serv_select;
			
			// find 100g
			for (var i = 0; i < servings.length; i++)
			{
				if (servings[i].metric_serving_unit == 'g' && parseInt(servings[i].metric_serving_amount, 0) == 100) {
					item = servings[i];
				}

				if (servings[i].measurement_description.indexOf('cup') > -1) {
					cup = servings[i];
				}

				servs.push({ name: servings[i].serving_description, unit: servings[i].measurement_description, amount: servings[i].metric_serving_amount });
			}

			var pgr = 100.0 / parseFloat(item.metric_serving_amount);

			// fix fields
			item.calcium = item.calcium * pgr;
			item.calories = item.calories * pgr;
			item.carbohydrate = item.carbohydrate * pgr;
			item.fat_total = item.fat * pgr;
			item.fat_saturated = item.saturated_fat * pgr;
			item.fat_trans = (item.trans_fat ? item.trans_fat : (parseFloat(item.monounsaturated_fat) + parseFloat(item.polyunsaturated_fat))) * pgr;
			item.dietary_fiber = item.fiber * pgr;
			item.sugars = (item.sugar ? item.sugar : 0.00) * pgr;
			item.cholestrol = item.cholesterol * pgr;
			item.iron = item.iron * pgr;
			item.protein = item.protein * pgr;
			item.vitamin_a = item.vitamin_a * pgr;
			item.vitamin_c = item.vitamin_c * pgr;
			item.sodium = item.sodium * pgr;

			// fields wanted
			var wanted = ['calories', 'fat_total', 'fat_saturated', 'fat_trans', 'cholestrol', 'sodium', 'carbohydrate', 'dietary_fiber', 'sugars', 'protein', 'vitamin_a', 'vitamin_c', 'calcium', 'iron'];

			// loop through wanted fields
			for (i = 0; i < wanted.length; i++)
				$('input[name = ' + wanted[i] + ']').val(item[wanted[i]].toFixed(2));

			// grams in 1 cup
			$('input[name=multiplier]').val(cup ? cup.metric_serving_amount : '');

			// populate select
			if ($('input[name=piece_100g]').prev().hasClass('dyngen'))
			{
				serv_select = $('input[name=piece_100g]').prev().empty();
			}
			else
			{
				serv_select = $(document.createElement('select')).addClass('dyngen').on('change', function(){
					$('input[name=piece_100g]').val($(this).val());
				});
			}

			for (i = 0; i < servs.length; i++)
			{
				serv_select.append($(document.createElement('option')).val(servs[i].amount).text(servs[i].name).attr('data-unit', servs[i].unit));
			}

			$('input[name=piece_100g]').before(serv_select.trigger('change'));
		});

		return 1;
	},

	/** dynamic ingredients control */
	ingredients: function()
	{
		$.getJSON('/ingredient', function(ingredients){
			$('body').delegate('.ingredients-add-row', 'click', function(){
				$('.dynamic-ingredients').append($('.ingredients-template.hidden').clone().removeClass('hidden'));
				$('.typeahead-ingredient').each(function(){
					var m = $(this);
					m.typeahead({
						source: ingredients,
						items: 15,
						itemSelected: function(el, id, text){
							m.prev().val(id).attr('data-text', text);
						},
						display: 'name',
						val: 'id'
					});
				});
	
				$('.unitize').each(function(){
					var unit = $(this).find('.hiddenunit');
					var type = $(this).find('.typeunit');
					unit.on('change', function(){
						type.trigger('keyup');
					});
					type.on('keyup', function(){
						var val = {
							ori: $(this).val(),
							rpl: $(this).val().replace(',', '.').replace(/[^\d.]/g, '') + ' ' + unit.attr('data-unit')
						};
						if (val.ori !== val.rpl) {
							$(this).val(val.rpl);
							var pos = ($(this).val()).length - (unit.attr('data-unit')).length - 1;
							if ($(this).get(0).setSelectionRange) {
								$(this).get(0).setSelectionRange(pos, pos);
							} else if ($(this).get(0).createTextRange) {
								var range = $(this).get(0).createTextRange();
								range.collapse(true);
								range.moveEnd('character', pos);
								range.moveStart('character', pos);
								range.select();
							}
						}
					});
					$(this).find('.dropdown-menu li a').on('click', function(){
						unit.attr('data-unit', $(this).text()).val(($(this).attr('href')).replace(/#/,'')).trigger('change');
						$('.btn-group').removeClass('open');
						return false;
					});
				});
				$('.remove-ingredient').on('click', function(){
					if ($('.ingredients-template').length > 2)
						$(this).parent().remove();
					return false;
				});
				return false;
			});
			$('.ingredients-add-row:eq(0)').trigger('click');
			$('.dynamic-ingredients').sortable();
		});
	},

	instructions: function() {

		$('#instructions').on('show', function(){
				App.instructions.step(1);
		});

		this.instructions = {
			step: function(i) {
				var m = $('.dynamic-ingredients .ingredients-template:eq(0)');
				$('.step').not('.step'+i).hide();
				$('.step'+i).show();
				m.find('.typeunit, .unitize .btn-group, .typeahead-ingredient, .inote').css({ zIndex: 'auto' });
				if (i == 1) m.find('.typeunit').css({ position: 'relative', zIndex: 1050 });
				if (i == 2) m.find('.unitize .btn-group').css({ position: 'relative', zIndex: 1050 });
				if (i == 3) m.find('.typeahead-ingredient').css({ position: 'relative', zIndex: 1050 });
				if (i == 4) m.find('.inote').css({ position: 'relative', zIndex: 1050 });
			}
		};
	}
};

/**
 * Utilities for application
 *
 * @package Cookbook
 * @author Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright (c) 2013
 */
var Utils = {
    pretty_time: function (minutes) {
        'use strict';
        var buffer = [],
            days = Math.floor(minutes / 60 / 24),
            hours = Math.floor((minutes - (Math.floor(minutes / 60 / 24) * 60 * 24)) / 60);
        if (minutes < 60) {
            buffer.push('00');
        }
        if (days > 0) {
            minutes -= days * 60 * 24;
            buffer.push((days < 10 ? '0' : '') + days);
        }
        if (hours > 0) {
            minutes -= hours * 60;
            buffer.push((hours < 10 ? '0' : '') + hours);
        }
        buffer.push((minutes < 10 ? '0' : '') + minutes);
        return buffer.join(':');
    }
};

$(document).on('ready', App.ready);