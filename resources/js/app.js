import './bootstrap';
import 'flowbite';
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    const submenuLinks = document.querySelectorAll('.mobile-menu .menu-link');
    const menuLinks = document.querySelectorAll('.menu-link');
    const currentPath = window.location.pathname;

    // Toggle menú móvil
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Añadir funcionalidad para los submenús
    submenuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const submenu = link.nextElementSibling;
            if (submenu && submenu.classList.contains('submenu')) {
                e.preventDefault(); // Evita que el enlace navegue a otra página
                submenu.classList.toggle('hidden');
            }
        });
    });

    // Añadir clase activa a los enlaces de menú
    menuLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }

        // Activar submenú si una de sus rutas está activa
        const submenu = link.nextElementSibling;
        if (submenu && submenu.classList.contains('submenu')) {
            const submenuLinks = submenu.querySelectorAll('.submenu-link');
            submenuLinks.forEach(subLink => {
                if (subLink.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                    submenu.classList.remove('hidden'); // Mostrar submenú
                }
            });
        }
    });
});

