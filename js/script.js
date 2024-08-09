// script.js
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    // Function to open a specific modal
    function openModal(modalId) {
        let modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "block";
        }
    }

    // Function to close a specific modal
    function closeModal(modalId) {
        let modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "none";
        }
    }

    // Get all buttons that open modals
    let openModalBtns = document.querySelectorAll("[id^='openModalBtn']");

    // Attach click event to each button to open the corresponding modal
    openModalBtns.forEach(function (btn) {
        btn.onclick = function () {
            let modalId = "myModal" + btn.id.replace("openModalBtn", "");
            openModal(modalId);
        }
    });

    // Get all close buttons and attach click event to close their parent modal
    let closeBtns = document.querySelectorAll(".modalClose");
    closeBtns.forEach(function (btn) {
        btn.onclick = function () {
            let modal = btn.closest(".modal");
            if (modal) {
                modal.style.display = "none";
            }
        }
    });

    // When the user clicks anywhere outside of a modal, close it
    window.onclick = function (event) {
        let modals = document.querySelectorAll(".modal");
        modals.forEach(function (modal) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    }

    // When the user presses the escape key, close all modals
    document.onkeydown = function (event) {
        if (event.key === "Escape") {
            let modals = document.querySelectorAll(".modal");
            modals.forEach(function (modal) {
                modal.style.display = "none";
            });
        }
    }
});

// Get all sections and menu links
const sections = document.querySelectorAll('section');
const highlightNavLinks = document.querySelectorAll('.nav-links a');

window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= sectionTop - sectionHeight / 3) {
            current = section.getAttribute('id');
        }
    });

    highlightNavLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});