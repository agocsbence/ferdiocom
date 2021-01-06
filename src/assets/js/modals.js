
// MODALS

$(document).ready(function() {

	var modals = $('.modal');

	if (modals != '') {

		modals.each(function() {
			var modal = $(this);
			var modalInner = modal.find('.modal-inner');
			var grid = modal.find('.modal-grid');
			var padding = modalInner.css('padding-top');
			var padding_number = padding.substr(0, padding.length - 2);

			function justify() {

				if (modal.css('opacity') === '0') {
					modal.css({
						'pointer-events': 'none',
						'display': 'flex'
					});
				};
				if ((grid.outerHeight() + (padding_number * 2)) >= $(window).outerHeight()) {
					modalInner.css({
						'justify-content': 'flex-start',
						'-webkit-justify-content': 'flex-start',
						'-ms-flex-pack': 'flex-start'
					});
				} else {
					modalInner.css({
						'justify-content': 'center',
						'-webkit-justify-content': 'center',
						'-ms-flex-pack': 'center'
					});
				};

				if (modal.css('opacity') === '0') {
					modal.css({
						'pointer-events': 'all',
						'display': 'none'
					});
				};

			};

			justify();
			$(window).resize(function() {
				justify();
			});

		});

		$('.button[data-modal="open"]').click(function(e) {
			e.preventDefault();
			$('body').css('overflow', 'hidden');
			$('html').css('overflow', 'hidden');
		});

		$('.menu-button[data-modal="close"]').click(function(e) {
			e.preventDefault();
			$('body').css('overflow', 'auto');
			$('html').css('overflow', 'auto');
			setTimeout(function() {
				$('.modal .modal-inner').scrollTop(0);
			}, 500);
		});

	} else {
		return
	};

});
