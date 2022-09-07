//Smooth scrolling animation

const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
	link.addEventListener("click", function (e) {
		const href = link.getAttribute("href");

		// Scroll back to top
		if (href === "#") {
			e.preventDefault();

			window.scrollTo({
				top: 0,
				behavior: "smooth",
			});
		}

		// Scroll to other links
		if (href.startsWith("#") && href.length > 1) {
			e.preventDefault();
			const sectionEl = document.querySelector(href);
			sectionEl.scrollIntoView({ behavior: "smooth" });
		}
	});
});
