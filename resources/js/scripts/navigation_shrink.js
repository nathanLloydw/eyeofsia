window.addEventListener("load",function()
{
    let nav = document.getElementsByClassName('shrink-nav');

    if(nav.length > 0)
    {
        window.onscroll = function() {scrollFunction()};
    }
});

function scrollFunction()
{
    let nav = document.getElementsByClassName('shrink-nav');

    if (document.documentElement.scrollTop > 104)
    {
        nav[0].classList.remove('md:py-6');
        nav[0].classList.add('md:py-2');
    }
    else if(document.documentElement.scrollTop < 75)
    {
        nav[0].classList.remove('md:py-2');
        nav[0].classList.add('md:py-6');
    }

}