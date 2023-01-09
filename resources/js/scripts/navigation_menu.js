window.addEventListener("load", function()
{
    // main menu
    const btn = document.querySelector("#menu-btn");
    const menu = document.querySelector("#mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    // sub menus

    const sub_menus = document.querySelectorAll(".mobile-dropdown-trigger");

    sub_menus.forEach(sub_menu =>
    {
        sub_menu.addEventListener("click", () => {
            sub_menu.nextElementSibling.classList.toggle("hidden");
        });
    });
});