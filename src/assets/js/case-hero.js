// CASE HERO SIZE

$(document).ready(function() {

	var wrapper = $('.case-hero-inner');

	if (wrapper != '') {

		wrapper.each(function() {
			var element = $(this).find('.case-hero-element');
			var elementWidth = element.outerWidth();
			var elementHeight = element.outerHeight();

			function elementResize() {

				var wrapperWidth = $(this).outerWidth();
				var wrapperHeight = $(this).outerHeight();

				if ((wrapperWidth / wrapperHeight) >= (elementWidth / elementHeight)) {
					element.css({
						'width': wrapperWidth,
						'height': wrapperWidth * (elementHeight / elementWidth)
					});
				} else {
					element.css({
						'width': wrapperHeight * (elementWidth / elementHeight),
						'height': wrapperHeight
					});
				}
			};

			elementResize();
			$(window).resize(elementResize);

		});

	} else {
		return;
	};

});
