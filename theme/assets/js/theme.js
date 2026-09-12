/**
 * Uranium front-end script.
 *
 * The light and dark toggle is the only behavior here. Everything else on
 * the page works without JavaScript.
 */
( function () {
	'use strict';

	var root = document.documentElement;
	var KEY = 'uranium-color-mode';
	var text = window.uraniumL10n || { toDark: 'Switch to dark mode', toLight: 'Switch to light mode' };
	var media = window.matchMedia ? window.matchMedia( '(prefers-color-scheme: dark)' ) : null;

	function currentMode() {
		var set = root.getAttribute( 'data-theme' );
		if ( set === 'light' || set === 'dark' ) {
			return set;
		}
		return media && media.matches ? 'dark' : 'light';
	}

	function paint( toggles ) {
		var dark = currentMode() === 'dark';
		toggles.forEach( function ( el ) {
			var label = dark ? text.toLight : text.toDark;
			el.setAttribute( 'aria-pressed', dark ? 'true' : 'false' );
			el.setAttribute( 'aria-label', label );
			el.setAttribute( 'title', label );
		} );
	}

	function init() {
		var toggles = Array.prototype.slice.call( document.querySelectorAll( '.u-mode-toggle a, .u-mode-toggle button' ) );

		if ( ! toggles.length ) {
			return;
		}

		toggles.forEach( function ( el ) {
			el.setAttribute( 'role', 'button' );

			el.addEventListener( 'click', function ( event ) {
				var next = currentMode() === 'dark' ? 'light' : 'dark';
				event.preventDefault();
				root.setAttribute( 'data-theme', next );
				try {
					window.localStorage.setItem( KEY, next );
				} catch ( error ) {
					// Private browsing can block storage; the choice still applies to this page.
				}
				paint( toggles );
			} );

			el.addEventListener( 'keydown', function ( event ) {
				if ( event.key === ' ' ) {
					event.preventDefault();
					el.click();
				}
			} );
		} );

		paint( toggles );

		if ( media && media.addEventListener ) {
			media.addEventListener( 'change', function () {
				paint( toggles );
			} );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
