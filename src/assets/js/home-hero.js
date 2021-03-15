// HOME HERO
$(document).ready(function() {

	var heros = $('.section.home-hero');
	if (heros) {
		var random_num = Math.floor(Math.random() * heros.length),
			hero = heros.eq(random_num);
			console.log(hero);

		heros.each(function() {
			if (!$(this).is(heros.get(random_num))) {
				$(this).parent().remove();
			}
		});

		// Change highlight and logo color
		var highlight_color = hero.find('.data-home-hero-colors .data-highlight-color').css('color'),
			logo_color = hero.find('.data-home-hero-colors .data-logo-color').text();

		hero.find('.home-hero-highlight').css('color', highlight_color);
		hero.find('.home-hero-highlight').css('color', highlight_color);

		if (logo_color == 'White') {
			hero.addClass('dark-bg');
		} else {
			return;
		}

		// BACKGROUND RESIZE
		var wrappers = hero.find('.home-hero-inner');

		wrappers.each(function() {
			var element = $(this).find('.home-hero-element');
			var elementWidth = element.outerWidth();
			var elementHeight = element.outerHeight();

			console.log(elementHeight);
			console.log(elementWidth);

			function elementResize() {

				var wrapperWidth = $(this).outerWidth();
				var wrapperHeight = $(this).outerHeight();

				element.css({
					'width': wrapperWidth,
					'height': wrapperWidth * (elementHeight / elementWidth)
				});

			};

			elementResize();
			$(window).resize(elementResize);
		});

	} else {
		return
	};

});
