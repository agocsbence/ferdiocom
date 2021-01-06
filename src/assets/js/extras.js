// MAKE SURE ALL IMG TAGS HAVE ATTRIBUTE "SIZES"

$(document).ready(function() {

	$('img').each(function() {
		$(this).attr('sizes', '100vw');
	});

});


// MENU APPEARS ON PAGE TOP

$(document).ready(function() {

	$(window).scroll(function() {
		if ($(window).scrollTop() < 100) {
			$('.brand-erdio').removeAttr('style');
		}
	});

});

// BUTTON ARROWS

$(document).ready(function() {

	var buttons = $('.button').not('.no-arrow');

	if (buttons != '') {
		buttons.each(function() {
			$(this).append('<span class="button-arrow"></span>');
		});
	} else {
		return;
	};

});

// ENTRY ARROWS

$(document).ready(function() {

	var entryTitles = $('.entry-title');

	if (entryTitles != '') {
		entryTitles.each(function() {
			$(this).append('<span class="entry-arrow"></span>');
		});
	} else {
		return;
	};

});

// TEXT BEFORE TABS

$(document).ready(function() {

	var tabsMenu = $('.tabs-menu');

	if (tabsMenu != '') {
		tabsMenu.each(function() {
			var textBefore = $(this).data('before');
			$(this).prepend('<h4 class="text-before">' + textBefore + '</h4>');
		});
	} else {
		return;
	};

});
