// Glide

var glideHero = new Glide('.hero', {

	perView: 5,
	gap: 35,
	breakpoints: {
		1100: {
			perView: 4
		},
		900: {
			perView: 3
		},
		700: {
			perView: 2
		}
	}

});

glideHero.mount();

// Service Worker

// Register our service-worker

if (navigator.serviceWorker) {

	window.addEventListener('load', function() {

		navigator.serviceWorker.register('/service-worker.js', {
			scope: '/'
		});

		if (navigator.serviceWorker.controller) {
			navigator.serviceWorker.controller.postMessage({'command': 'trimCaches'});
		}

	});

}
