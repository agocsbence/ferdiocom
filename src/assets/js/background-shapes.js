// REACTING BACKGROUND SHAPES  

$(document).ready(function() {

	var targets = $('*[data-react-type="target"]'),
		trigger_targets = $('*[data-react-type="trigger-target"]');

	$.fn.scrollStopped = function(callback) {
		var that = this,
			$this = $(that);
		$this.scroll(function(ev) {
			clearTimeout($this.data('scrollTimeout'));
			$this.data('scrollTimeout', setTimeout(callback.bind(that), 50, ev));
		});
	};

	var scroll = false;

	$(window).on("scroll", function() {
		scroll = true;
		return scroll;
	});

	$(window).scrollStopped(function(ev) {
		scroll = false;
		return scroll;
	});

	if (trigger_targets != '') {
		$.merge(targets, trigger_targets);
	} else {
		return
	};

	if (targets != '') {

		targets.each(function() {

			var target = $(this),
				id = target.data('react-id'),
				shape = $('*[data-react-type="shape"][data-react-id="' + id + '"]'),
				grid = shape.closest('.grid'),
				section = shape.closest('.section'),
				shape_initial_width,
				shape_initial_height,
				shape_initial_top,
				shape_initial_left,
				shape_transition_duration = parseFloat(shape.css('transition-duration')),
				shape_transition_delay = '0.07s',
				bottom_transition_duration = 3;

			if (target.attr('data-react-type') == 'trigger-target') {
				var trigger = target;
			} else {
				var trigger = target.find($('*[data-react-type="trigger"]'));
			};

			function react_bg_shapes() {

				shape_initial_width = shape.outerWidth();
				shape_initial_height = shape.outerHeight();
				shape_initial_top = shape.css('top');
				shape_initial_left = shape.css('left');

				shape.css({
					'width': shape_initial_width,
					'top': shape_initial_top,
					'left': shape_initial_left
				});

				if (shape.hasClass('rectangle')) {
					shape.css({
						'height': shape_initial_height
					});
				} else if (shape.hasClass('circle')) {
					shape.css({
						'padding-top': shape_initial_width
					});
				};

				function mouseover() {

					// RECTANGLE
					if (shape.hasClass('rectangle')) {

						var grid_width = grid.outerWidth(),
							grid_column_gap = parseInt(grid.css('grid-column-gap')),
							grid_column_width = ((grid_width - (grid_column_gap * 11)) / 12) + grid_column_gap,
							row_gap = parseInt(target.parent().css('grid-row-gap')),
							target_height = target.outerHeight();

						// Rectangle position
						shape.offset({
							top: target.offset().top - (row_gap / 2)
						});

						// Rectangle size
						shape.css('height', target_height + row_gap);

						// CIRCLE
					} else if (shape.hasClass('circle')) {

						var target_width = target.outerWidth(),
							target_height = target.outerHeight(),
							shape_size,
							extra;

						shape.css({
							'top': shape.css('top'),
							'left': shape.css('left'),
							'transition-duration': shape_transition_duration + 's',
							'transition-delay': shape_transition_delay
						});

						// Center on target
						if (target.data('react-center') == true) {

							// Circle position
							if (target_width <= target_height) {
								extra = target_height * 0.3;
								shape_size = target_height + (extra * 2);
								shape.offset({
									top: target.offset().top - extra,
									left: target.offset().left - (shape_size / 2) + (target_width / 2)
								});
							} else {
								extra = target_width * 0.2;
								shape_size = target_width + (extra * 2);
								shape.offset({
									top: target.offset().top - (shape_size / 2) + (target_height / 2),
									left: target.offset().left - extra
								});
							};

							// Circle size
							shape.css({
								'width': shape_size,
								'padding-top': shape_size
							});

							// Don't center on target
						} else {

							// Circle position
							if (((target_width <= shape_initial_width) && (target_height <= shape_initial_width)) || ((target_width <= shape_initial_width) && (target_height > shape_initial_width))) {
								// Target width <= Shape width & Target height <= Shape width
								// Target width <= Shape width & Target height > Shape width
								shape_size = target_width;
								extra = target_width * 0.2;
							} else if ((target_width > shape_initial_width) && (target_height > shape_initial_width)) {
								// Target width > Shape width & Target height > Shape width
								shape_size = target_width;
								extra = target_width * 0.2;
							} else if ((target_width > shape_initial_width) && (target_height <= shape_initial_width)) {
								// Target width > Shape width & Target height <= Shape width
								shape_size = target_height * 1.2;
								extra = target_height * 0.2;
							};

							shape.offset({
								top: target.offset().top + target_height - shape_size + extra,
								left: target.offset().left - extra
							});

							// Circle position and size
							shape.css({
								'width': shape_size,
								'padding-top': shape_size
							});

						};
					};

					shape.addClass('on-target');
				};

				function mouseout() {

					// RECTANGLE
					if (shape.hasClass('rectangle')) {

						shape.css({
							'top': shape_initial_top,
							'height': shape_initial_height
						});

					}

					// CIRCLE
					else if (shape.hasClass('circle')) {

						var section_bottom = section.offset().top + section.outerHeight(),
							shape_top = shape.offset().top - ((shape_initial_width - shape.outerWidth()) / 2),
							shape_bottom = shape_top + shape_initial_width,
							shape_left = shape.offset().left - ((shape_initial_width - shape.outerWidth()) / 2);
						// Circle position
						if ((section_bottom) <= shape_bottom && !section.is(':last-child') && shape.data('react-bottom') != false) {
							shape.css({
								'transition-duration': bottom_transition_duration + 's',
								'transition-delay': '0s'
							});
							// Close to bottom of section
							shape.offset({
								top: shape_top - (section.outerHeight() * 0.4)
							});

							setTimeout(function() {
								shape.css({
									'transition-duration': shape_transition_duration + 's',
									'transition-delay': shape_transition_delay
								});
							}, bottom_transition_duration * 1000);

						} else {
							// Not close to bottom of section
							shape.offset({
								top: shape_top,
								left: shape_left
							});

						};
						// Circle size
						shape.css({
							'width': shape_initial_width,
							'padding-top': shape_initial_width
						});
					};

					shape.removeClass('on-target');
				};

				trigger.mouseover(function() {
					if (scroll == false && !shape.hasClass('on-target')) {
						mouseover();
					} else {
						return
					};
				});

				trigger.mousemove(function() {
					if (scroll == false && !shape.hasClass('on-target')) {
						mouseover();
					} else {
						return
					};
				});

				trigger.mouseout(function() {
					if ($(this).data('react-id') == 'chat' && $(this).find('.chat-reply-input').is(":focus")) {
						return;
					} else {
						mouseout();
					}
				});

				if (trigger.data('react-id') == 'chat') {
					trigger.find('.chat-reply-input').focus(mouseover);
					trigger.find('.chat-reply-input').focusout(mouseout);
				}

				// $(window).on('scroll resize', mouseout);

			};

			function check_bottom_circle() {

				if (shape.hasClass('circle')) {

					var section_bottom = section.offset().top + section.outerHeight(),
						shape_bottom = shape.offset().top + shape.outerWidth();

					// Circle position
					if ((section_bottom) <= shape_bottom && !section.is(':last-child') && shape.data('react-bottom') != false) {
						shape.css({
							'transition-duration': bottom_transition_duration + 's',
							'transition-delay': '0s'
						});
						// Close to bottom of section
						shape.offset({
							top: shape.offset().top - (section.outerHeight() * 0.4)
						});

						setTimeout(function() {
							shape.css({
								'transition-duration': shape_transition_duration + 's',
								'transition-delay': shape_transition_delay
							});
						}, bottom_transition_duration * 1000);

					} else {
						return;
					};

				} else {
					return;
				};

			};

			react_bg_shapes();

			$(window).on('resize', function() {
				shape.css({
					'width': '',
					'top': '',
					'left': ''
				});
				if (shape.hasClass('rectangle')) {
					shape.css({
						'height': ''
					});
				} else if (shape.hasClass('circle')) {
					shape.css({
						'padding-top': ''
					});
				};
				setTimeout(function() {
					react_bg_shapes();
				}, shape_transition_duration * 1000);
			});
			check_bottom_circle();
			$(window).on('scroll resize', check_bottom_circle);

		});

	} else {
		return
	};

});
