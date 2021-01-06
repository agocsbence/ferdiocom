// MENU COLOR CHANGE ON DARK BG

$(document).ready(function() {

	function dark_menu() {
		$('a.brand').addClass('dark');
		$('.w-nav-button .menu-line').addClass('dark');
	};

	function light_menu() {
		$('a.brand').removeClass('dark');
		$('.w-nav-button .menu-line').removeClass('dark');
	};

	function open_close_menu() {
		setTimeout(function() {
			if ($('.w-nav-button').hasClass('w--open')) {
				dark_menu();
				$('html').css('overflow', 'hidden');
				$('.brand-erdio').removeAttr('style');
			} else {
				light_menu();
				$('html').removeAttr('style');
			};
		}, 100);
	};

	if ($('.dark-bg').length > 0) {

		var isDark = false;

		function check_dark() {
			isDark = false;
			$('.dark-bg').each(function(i, section) {
				if (isDark) {
					return;
				}
				var sectionTop = $(section).offset().top - ($('.navbar-nav').outerHeight() / 2),
					sectionBottom = sectionTop + $(section).outerHeight(),
					scrollTop = $(window).scrollTop();
				if ((sectionTop <= scrollTop) && (sectionBottom >= scrollTop)) {
					isDark = true;
					return;
				}
			});
		};

		function switch_menu() {
			if (isDark == true) {
				dark_menu();
			} else {
				light_menu();
			};
		};

		check_dark();
		switch_menu();

		$(window).on('scroll resize', function() {
			check_dark();
			switch_menu();
		});

		$('.w-nav-button').click(function() {
			check_dark();
			if (isDark == true) {
				setTimeout(function() {
					if ($('.w-nav-button').hasClass('w--open')) {
						$('html').css('overflow', 'hidden');
					} else {
						$('html').removeAttr('style');
					};
				}, 100);
			} else {
				open_close_menu();
			};
		});

	} else {
		$('.w-nav-button').click(function() {
			open_close_menu();
		});
	};

});
