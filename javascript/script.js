/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import Swiper from 'swiper';

document.addEventListener('DOMContentLoaded', () => {
	initDropdowns();
	initMobileSwipers();
});

function initDropdowns() {
	const dropdowns = document.querySelectorAll('[data-js="dropdown"]');
	if (dropdowns.length) {
		dropdowns.forEach((dropdown) => {
			const toggler = dropdown.querySelector(
				'[data-js="dropdown-toggle"]'
			);
			const container = dropdown.querySelector(
				'[data-js="dropdown-container"]'
			);
			if (!toggler || !container) return;

			let dropdownExpanded =
				toggler.getAttribute('aria-expanded') === 'true' || false;
			if (dropdownExpanded) toggleDropdown(true, toggler, container);

			toggler.addEventListener('click', function () {
				toggleDropdown(!dropdownExpanded, toggler, container);
				dropdownExpanded = !dropdownExpanded;
			});

			window.addEventListener('resize', () => {
				toggleDropdown(dropdownExpanded, toggler, container);
			});
		});
	}
}

function toggleDropdown(expanded, btn, container) {
	btn.setAttribute('aria-expanded', expanded);
	if (expanded) {
		container.style.height = container.scrollHeight + 'px';
	} else {
		container.style.removeProperty('height');
	}
}

function toggleMenuContainer() {
	if (-1 !== container.className.indexOf('toggled')) {
		container.className = container.className.replace(' toggled', '');
		button.setAttribute('aria-expanded', 'false');
		button.classList.remove('ks-menu-toggler--active');
	} else {
		container.className += ' toggled';
		button.setAttribute('aria-expanded', 'true');
		button.classList.add('ks-menu-toggler--active');
	}
}
const container = document.getElementById('site-navigation');
const button = document.getElementsByTagName('button')[0];
button.addEventListener('click', () => {
	toggleMenuContainer();
});

function initMobileSwipers() {
	const swiperContainers = document.querySelectorAll(
		'[data-js="swiper-tiles-mobile"]'
	);
	swiperContainers.forEach((el) => {
		new Swiper(el, {
			spaceBetween: 20,
			slidesPerView: 1.2,
			enabled: true,
			breakpoints: {
				560: {
					slidesPerView: 1.5,
					spaceBetween: 20,
					enabled: true,
				},
				768: {
					slidesPerView: 2.2,
					spaceBetween: 25,
					enabled: true,
				},
				1000: {
					slidesPerView: 2.5,
					spaceBetween: 35,
					enabled: true,
				},
				1280: {
					slidesPerView: 'auto',
					spaceBetween: 0,
					enabled: false,
				},
			},
		});
	});
}
