document.addEventListener("DOMContentLoaded", function(evt) {
	'use strict';

	/*
	 * Expandable portfolio sections
	 */ 
	var portfolioSection = document.querySelectorAll('.portfolio section');
	for (var i = 0; i < portfolioSection.length; i++) {
		portfolioSection[i].addEventListener('click', function(evt) {
			this.classList.toggle('expanded');
		});
	}

	/*
	 * Functionality for in-page language translation
	 */
  var changeLanguageLink = document.querySelector('.language-options a');
  if (changeLanguageLink) {
  	changeLanguageLink.addEventListener('click', function(evt) {
	  	evt.preventDefault();
	  	var modal = document.querySelectorAll('.language.modal');
	  	for (var i = 0; i < modal.length; i++) {
	  		modal[i].classList.remove('hide');
	  	}
	  });
  }

  var cancellations = document.querySelectorAll('.language.modal.backdrop, .language.modal .cancel');
  for (var i = 0; i < cancellations.length; i++) {
  	cancellations[i].addEventListener('click', function(evt) {
	  	var modal = document.querySelectorAll('.language.modal');
	  	for (var j = 0; j < modal.length; j++) {
	  		modal[j].classList.add('hide');
	  	}
	  });
  }

  var languages = document.querySelectorAll('.modal.body a');
  for (var i = 0; i < languages.length; i++) {
  	languages[i].addEventListener('click', function(evt) {
	  	evt.preventDefault();
	  	changeLanguage(this.getAttribute('data-language'));
	  });
  }

  function changeLanguage(language) {
  	var ajax = new XMLHttpRequest();
  	var data = new FormData();
  	data.append('language', language);
  	ajax.onreadystatechange = function() {
  		if (this.readyState === XMLHttpRequest.DONE) {
  			if (this.status === 200) {
  				window.location.reload(true);
  			}
  		}
  	}
  	ajax.open('POST', '/php/language.php');
  	ajax.send(data);
  }
});
