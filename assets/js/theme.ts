import manageAccordions from "./manageAccordion";
import manageMegaMenu from "./manageMegaMenu";
import manageSiteOverlay from "./manageSiteOverlay";
import specialistsAjax from "./specialistsAjax";
import Swiper, { Autoplay } from "swiper";
import "swiper/css";
import "swiper/css/navigation";

window.addEventListener("DOMContentLoaded", () => {
	let offerSlider = document.querySelector(".offer-slider");
	if (offerSlider) {
		const swiper = new Swiper(".offer-slider", {
			direction: "horizontal",
			loop: true,
			slidesPerView: 2,
			spaceBetween: 75,
			modules: [Autoplay],
			autoplay: {
				delay: 2500,
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				991: {
					slidesPerView: 2,
				},
			},
		});
	}

	manageAccordions(".prices__table-btn");
	manageMegaMenu();
	manageSiteOverlay();
	mobileNavHandle();
	lvl3MobileNavHandle();
	mobilNavTriggers();
	let specialistMoreBtn = document.querySelectorAll(".specialists__link--more");
	for (let btn of specialistMoreBtn) {
		btn.addEventListener("click", (e) => {
			e.preventDefault();
			let doctor_id = (e.currentTarget as HTMLAnchorElement).dataset.doctor;
			specialistsAjax(doctor_id);
		});
	}
});

function mobileNavHandle() {
	let navLinks = document.querySelectorAll(".main-nav__link.mobile");
	Array.from(navLinks).forEach((el) => {
		el.addEventListener("click", (ev) => {
			let target = ev.currentTarget as HTMLAnchorElement;
			if (target.classList.contains("has-children-mobile")) {
				target.classList.toggle("active");
			}

			let selecotr = "[data-lvl1-menu='" + target.dataset.parent + "']";
			let theSubMenu = document.querySelector(selecotr) as HTMLElement;
			if (target.classList.contains("active")) {
				theSubMenu.style.height = "400px";
			} else {
				theSubMenu.style.height = "0px";
			}
		});
	});
}

function lvl3MobileNavHandle() {
	let navLinks = document.querySelectorAll(
		".mega-menu__link.mobile.has-children"
	);
	Array.from(navLinks).forEach((el) => {
		el.addEventListener("click", (ev) => {
			ev.preventDefault();
			Array.from(navLinks).forEach((item) => {
				item.classList.remove("active");
			});

			let target = ev.currentTarget as HTMLAnchorElement;
			let selecotr = "[data-lvl3-menu='" + target.dataset.menu + "']";
			let theSubMenu = document.querySelector(selecotr) as HTMLElement;

			if (target.classList.contains("active")) {
				theSubMenu.style.height = "0px";
				target.classList.remove("active");
			}

			target.classList.toggle("active");
			console.log(target);

			if (target.classList.contains("active")) {
				theSubMenu.style.height = theSubMenu.scrollHeight + "px";
			} else {
				theSubMenu.style.height = "0px";
			}
		});
	});
}

function mobilNavTriggers() {
	let openBtn = document.querySelector(".open-mobile-nav");
	let mobileNav = document.querySelector(".main-nav__nav.mobile");
	if (!openBtn) return;

	openBtn.addEventListener("click", (ev) => {
		ev.preventDefault();
		console.log("a");
		mobileNav.classList.toggle("show");
	});

	let closeBtn = document.querySelector(".close-mobile-nav");

	closeBtn.addEventListener("click", (ev) => {
		ev.preventDefault();
		console.log("b");
		mobileNav.classList.toggle("show");
	});
}
