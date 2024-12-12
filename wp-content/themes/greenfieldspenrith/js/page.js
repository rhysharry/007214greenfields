(function () {
	document.addEventListener('DOMContentLoaded', function () {
		if (window.innerWidth > 768) {
			const header = document.querySelector('header');
			const scrollThreshold = 90;

			if (header) {
				window.addEventListener('scroll', function () {
					if (window.scrollY > scrollThreshold) {
						header.classList.add('scrolled');
					} else {
						header.classList.remove('scrolled');
					}
				});
			}
		}
	});
})();