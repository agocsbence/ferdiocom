// CHAT PROMPT BOX

$(document).ready(function() {

	$('#Smallchat iframe').addClass('chat-button');

	$("#chat-reply").on('keypress', function(e) {
		if (e.which == 13) {
			if (event.shiftKey) {
				return
			} else {
				Smallchat("open");
				e.preventDefault();
				Smallchat("send", $(".chat-reply-input").get(0).value);
				$(this)[0].reset();
				$(this).find('.chat-reply-size').empty();
			}
		}
	});

});

var textContainer, textareaSize, input;
var autoSize = function() {
	textareaSize.innerHTML = input.value + '\n';
};

document.addEventListener('DOMContentLoaded', function() {
	textContainer = document.querySelector('#chat-reply');
	if (textContainer != null) {
		textareaSize = textContainer.querySelector('.chat-reply-size');
		input = textContainer.querySelector('.chat-reply-input');
		autoSize();
		input.addEventListener('input', autoSize);
	} else {
		return
	};
});
