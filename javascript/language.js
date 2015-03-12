/*
 * Contains logic for changing the language on the website
 */

$(function() {
	$(".language-options a[data-action=switch-language]").on("click", function(e) {
		e.preventDefault();
		$(".language.modal").removeClass("hide");
	});

	$(".language.modal.backdrop, .language.modal .cancel").on("click", function() {
		$(".language.modal").addClass("hide");
	});

	$(".language.modal a[data-language]").on("click", function(e) {
		e.preventDefault();
		console.log("Changing language");
		changeLanguage($(this).data("language"));
	});

	function changeLanguage(language) {
		console.log("Changing language to " + language);
		$.post('/php/language.php', {
			language: language
		}).done(function(data) {
			window.location.reload(true);
		});
	}

	$(".portfolio section").on("click", function() {
		$(this).toggleClass("expanded");
	});
});