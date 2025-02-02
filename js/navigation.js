/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

document.addEventListener('DOMContentLoaded', function() {
	const menuToggle = document.querySelector('.menu-toggle');
	const primaryMenu = document.querySelector('#primary-menu');

	if (menuToggle) {
		menuToggle.addEventListener('click', function() {
			primaryMenu.classList.toggle('toggled');
			const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
			menuToggle.setAttribute('aria-expanded', !isExpanded);
		});
	}

});

