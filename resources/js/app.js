import './bootstrap';
import 'flowbite';
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    // Mostrar submenú en el menú móvil
    document.querySelectorAll('.mobile-menu > .relative > a').forEach(menu => {
        menu.addEventListener('click', (e) => {
            const submenu = menu.nextElementSibling;
            if (submenu) {
                e.preventDefault();
                submenu.classList.toggle('hidden');
            }
        });
    });
});
