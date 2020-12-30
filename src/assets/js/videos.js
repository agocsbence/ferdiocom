// VIDEOS

$(document).ready(function() {

	var caseVideos = $('figcaption');

	if (caseVideos) {

		caseVideos.each(function() {
			if ($(this).text().indexOf('data-vimeo-id') > -1) {
				var posterSrc = $(this).siblings('div').find('img').attr('src'),
					posterAlt = $(this).siblings('div').find('img').attr('alt'),
					ids = $(this).text();
				$('<figure class="player-wrapper w-richtext-align-center w-richtext-figure-type-video"><div class="video overlay"><img src="' + posterSrc + '" sizes="100vw" alt="' + posterAlt + '" class="video poster"><div class="video fade"></div><a href="#" class="flex play-button w-inline-block"><div class="icon play-button"><img src="https://uploads-ssl.webflow.com/5d16087814f9117f026ad2e1/5db18f2a083f4bf97aa1c2cb_play.svg" alt="" class="icon-image play-button" sizes="100vw"><div class="button icon-button no-arrow play-button">Play<br>video</div></div></a></div><div class="video player" ' + ids + 'data-vimeo-autoplay="0" data-vimeo-loop="false" data-vimeo-playonhover="false" data-vimeo-background="false" data-vimeo-muted="false"></div></div>')
					.insertBefore($(this).parents('figure'));
				$(this).parent().remove();
			}
		})

	}

	var videos = $('*[data-vimeo-id]');

	if (videos.length > 0) {

		videos.each(function() {

			// Get video ID
			var id = $(this).data('vimeo-id');

			if (id != '') {

				// Get video options
				var player_container = $(this).parent(),
					player_class = $(this).attr('class'),
					thumbnail = $(this).siblings('thumbnail'),
					id_da = $(this).data('vimeo-id-da'),
					autoplay = ($(this).data('vimeo-autoplay')) ? 1 : 0,
					loop = ($(this).data('vimeo-loop')) ? 1 : 0,
					background = ($(this).data('vimeo-background')) ? 1 : 0,
					muted = ($(this).data('vimeo-muted')) ? 1 : 0,
					playonhover = $(this).data('vimeo-playonhover');

				// Append iframe and remove div with video options
				if (window.location.href.indexOf('/da/') > -1 && id_da != '') {
					player_container.append('<iframe class="' + player_class + '" src="https://player.vimeo.com/video/' + id_da + '?autoplay=' + autoplay + '&loop=' + loop + '&autopause=0&muted=' + muted + '&background=' + background + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>');
				} else {
					player_container.append('<iframe class="' + player_class + '" src="https://player.vimeo.com/video/' + id + '?autoplay=' + autoplay + '&loop=' + loop + '&autopause=0&muted=' + muted + '&background=' + background + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>');
				};

				$(this).remove();

				// Init Vimeo player
				var video = player_container.find('iframe');
				var player = new Vimeo.Player(video);

				player.ready().then(function() {

					if (playonhover == true) {

						if ($(window).outerWidth() <= 768) {

							var tolerancePixel = $(window).height() * 0.5;

							function playOnViewport() {
								// Get current browser top and bottom
								var scrollTop = $(window).scrollTop() + tolerancePixel;
								var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;
								var elementTop = video.offset().top;
								var elementBottom = video.height() + elementTop;

								// Play video
								if (scrollTop < elementBottom && scrollBottom > elementTop) { //view explaination in `In brief` section above
									player.play();
								} else {
									player.pause();
								};

							};

							playOnViewport();
							$(document).on('scroll', playOnViewport);

						} else {
							video.parents('.entry').mouseover(function() {
								player.play();
							});
							video.parents('.entry').mouseout(function() {
								player.pause();
							});
						}

					};

					if (player_class == 'thumbnail') {
						// Resize video to fit thumbnail
						function videoWidth() {
							video.css({
								'width': video.outerHeight() * (16 / 9)
							});
						};
						videoWidth();
						$(window).resize(videoWidth);
					} else if (player_class == 'video player') {
						// Not in viewport
						var play_button = player_container.find('.icon.play-button'),
							play_button_width = play_button.outerWidth();
						play_button.addClass('compressed');

						// If in viewport change CSS
						function onViewport() {
							var elementTop = player_container.offset().top,
								elementBottom = elementTop + player_container.outerHeight(),
								viewportTop = $(window).scrollTop(),
								viewportBottom = viewportTop + $(window).height();
							if (elementTop < (viewportTop + (viewportTop / 2))) {
								play_button.css('width', play_button_width);
								play_button.removeClass('compressed');
							}
						}

						onViewport();
						$(window).on('resize scroll', onViewport);

						// Play when overlay is clicked
						player_container.find('.video.overlay').click(function() {
							$(this).addClass('playing');
							player.play();
						});
					} else if (player_class == 'video showreel player') {
						// Play showreel when overlay is clicked
						player_container.find('.video.overlay').click(function() {
							if (window.location.href.indexOf('/da/') > -1 && id_da != '') {
								video.attr('src', 'https://player.vimeo.com/video/' + id_da + '?autoplay=0&loop=0&autopause=0&muted=0&background=0');
							} else {
								video.attr('src', 'https://player.vimeo.com/video/' + id + '?autoplay=0&loop=0&autopause=0&muted=0&background=0');
							};
							setTimeout(function() {
								player_container.find('.video.overlay').addClass('playing');
								player.play();
							}, 1000);
						});
					};

				});

				// Remove div with video options if it doesn't have video ID
			} else {
				$(this).remove();
			};

		});

	}

});
