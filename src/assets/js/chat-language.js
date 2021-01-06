document.addEventListener('DOMContentLoaded', function(event) {
	smallchat_script = document.querySelector("#smallchat-script")
	// Function for rebooting Smallchat
	function smallchat_restart() {
		smallchat_box = document.querySelector("#Smallchat")
		smallchat_box.remove()
		Smallchat("reboot")
		Smallchat("reset")
		console.log("Smallchat restart requested")
	}
	// Function for switching Smallchat channel depeding on Weglot language
	function smallchat_weglot_change(language) {
		if (language == 'da') {
			smallchat_script.setAttribute("src", "https://embed.small.chat/T031T7B6KGPVGXD2SU.js")
			console.log("Smallchat language set to " + language)
		} else {
			smallchat_script.setAttribute("src", "https://embed.small.chat/T031T7B6KGPGP5FPB4.js")
			console.log("Smallchat language set to default (" + language + ")")
		}
		smallchat_restart()
	}
	// When Weglot starts
	Weglot.on("initialized", function() {
		current_language = Weglot.getCurrentLang()
		console.log("Current language is " + current_language)
		smallchat_weglot_change(current_language)
	})
	// When Weglot changes
		Weglot.on("languageChanged", function(newLanguage, prevLanguage) {
		smallchat_weglot_change(newLanguage)
	})
})
