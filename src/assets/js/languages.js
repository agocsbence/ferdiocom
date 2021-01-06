$(document).ready(function() {

  // INITIALISE WEGLOT
  
  Weglot.initialize({
    api_key: 'wg_5b5e678aa14bad2208d40294b9f685cc9'
  });
  
  // REMOVE ELEMENTS THAT SHOW ONLY IN ONE LANGUAGE
  
	$('.data-lang').each(function() {
		if (window.location.href.indexOf('/da/') > -1 && $(this).text() == 'English') {
			$(this).parent().remove();
		} else if (!window.location.href.indexOf('/da/') > -1 && $(this).text() == 'Danish') {
			$(this).parent().remove();
		} else {
			return
		};
	});

});
