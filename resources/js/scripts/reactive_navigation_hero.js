window.addEventListener("load", function()
{
    const navigation = document.querySelectorAll("#desktop-menu li:not(.dropdown-item)")
    const navigation_hero = document.querySelectorAll("#navigation-hero-block img");

    if(navigation_hero.length > 0)
    {
        navigation.forEach(nav_item =>
        {
            nav_item.addEventListener("mouseover", () =>
            {
                let index = [...nav_item.parentElement.children].indexOf(nav_item);

                if(navigation_hero[index])
                {
                    navigation_hero.forEach(nav_img_item =>
                    {
                        nav_img_item.classList.add('hidden');
                    });

                    navigation_hero[index].classList.remove('hidden');
                }
            });
        });
    }
});