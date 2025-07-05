import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";
import "../css/animations.css";
import "@splidejs/splide/css";
import "@splidejs/splide/css/sea-green";

import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

import {
    initAlert,
    initTabs,
    initGallery,
    initAccordion,
    cleanupPopovers,
    cleanupDropdowns,
} from "david-ai";

// import { initDavidAI } from 'david-ai';

// initDavidAI();
initAlert();
// initTabs();
initGallery();
initAccordion();

cleanupPopovers();
cleanupDropdowns();

AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
    initClassName: "aos-init", // class applied after initialization
    animatedClassName: "aos-animate", // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});

// document.addEventListener('aos:in', ({ detail }) => {
//   console.log('animated in', detail);
// });

// document.addEventListener('aos:out', ({ detail }) => {
//   console.log('animated out', detail);
// });

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("main-navbar");
    if (window.scrollY > 20) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-[#66BB6A]/80");
    } else {
        navbar.classList.remove("bg-[#66BB6A]/80");
        navbar.classList.add("bg-transparent");
    }
    window.addEventListener("scroll", function () {
        if (window.scrollY > 20) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-[#66BB6A]/80");
        } else {
            navbar.classList.remove("bg-[#66BB6A]/80");
            navbar.classList.add("bg-transparent");
        }
    });

    const splideEl = document.querySelector("#news_page_splide");
    const news_splideEl = document.querySelector("#news_splide");
    if (splideEl) {
        new Splide(splideEl, {
            type: "loop",
            drag: "free",
            arrows: false,
            focus: "center",
            perPage: 2,
            autoScroll: {
                speed: 1,
            },
        }).mount({ AutoScroll });
    }

        if (news_splideEl) {
        new Splide(news_splideEl, {
            type: "loop",
            drag: "free",
            arrows: false,
            focus: "center",
            perPage: 2,
            autoScroll: {
                speed: 1,
            },
        }).mount({ AutoScroll });
    }

    document.querySelectorAll("img:not([loading])").forEach((img) => {
        img.setAttribute("loading", "lazy");
    });
});
