
// ANIMATIONS

$(document).ready(function() {

	var containers = $('*[data-animation="true"]');

	if (containers != '') {

		containers.each(function() {
			// Get container
			var container = $(this);
			// Get images
			var animation = container.find('.animation[data-animation-part="start"]'),
				animation_loop = container.find('.animation[data-animation-part="loop"]'),
				animation_hover = container.find('.animation[data-animation-part="hover"]');
			// Start variables
			var animation_src = animation.attr('src');

			if (animation_src != '') {
				var animation_srcset = animation.attr('data-srcset');
				// Delay
				var delay = animation.data('delay') * 1000;

				var animation_loop_src = animation_loop.attr('data-src');

				if (animation_loop_src != '') {
					// Frame rate
					var frame_rate = animation.data('frame-rate'),
						animation_duration = (animation.data('number-frames') * frame_rate) - frame_rate;
					// Loop variables
					var animation_loop_srcset = animation_loop.attr('data-srcset');

					var animation_hover = container.find('.animation[data-animation-part="hover"]'),
						animation_hover_src = animation_hover.attr('data-src');

					animation_loop.remove();

					if (animation_hover_src != '') {
						// Hover variables
						var animation_hover_srcset = animation_hover.attr('data-srcset'),
							animation_hover_duration = (animation_hover.data('number-frames') * frame_rate) - frame_rate,
							hover_trigger = container.find('*[data-react-type="trigger"]');

						animation_hover.remove();

					} else {
						animation_hover.remove();
					};
				} else {
					animation_loop.remove();
					animation_hover.remove();
				};

				// Functions for each part
				function startAnimation() {
					animation.attr('data-state', 'playing');
					setTimeout(function() {
						animation.attr('src', animation_src);
						animation.attr('srcset', animation_srcset);
						animation.removeClass('hidden');
					}, delay);
				};

				function loopAnimation() {
					setTimeout(function() {
						animation.attr('src', animation_loop_src);
						animation.attr('srcset', animation_loop_srcset);
						animation.attr('data-state', '');
					}, animation_duration + delay);
				};

				function hoverAnimation() {
					hover_trigger.mouseover(function() {
						if (animation.attr('data-state') == '') {
							animation.attr('src', animation_hover_src);
							animation.attr('srcset', animation_hover_srcset);
							animation.attr('data-state', 'playing');
							setTimeout(function() {
								animation.attr('src', animation_loop_src);
								animation.attr('srcset', animation_loop_srcset);
								animation.attr('data-state', '');
							}, animation_hover_duration);
						} else {
							return;
						};
					});
				};

				// Initialize animation
				function initAnimation() {
					var elementTop = container.offset().top,
						elementBottom = elementTop + container.outerHeight(),
						viewportTop = $(window).scrollTop(),
						viewportBottom = viewportTop + $(window).height();
					if (elementBottom > viewportTop && elementTop < viewportBottom && animation.hasClass('hidden') && animation.attr('data-state') != 'playing') {
						startAnimation();
						if (animation_loop_src != '' && animation_hover_src != '') {
							loopAnimation();
							hoverAnimation();
						} else if (animation_loop_src != '' && animation_hover_src == '') {
							loopAnimation();
						} else {
							return
						};
					} else {
						return
					};
				}

				animation.load(function() {
						initAnimation();
						$(window).on('resize scroll', initAnimation);
					})
					.each(function() {
						if (this.complete) $(this).load();
					});

			} else {
				console.log('no animation');
				animation.remove();
				animation_loop.remove();
				animation_hover.remove();
			}

		});

	} else {
		return;
	};

});
