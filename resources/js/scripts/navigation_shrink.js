window.onload = function()
{
    let nav = document.getElementsByClassName('shrink-nav');

    if(nav.length > 0)
    {
        window.onscroll = function() {scrollFunction()};
    }
}

function scrollFunction()
{
    let nav = document.getElementsByClassName('shrink-nav');

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
    {
        nav[0].classList.remove('md:py-6');
        nav[0].classList.add('md:py-2');
    }
    else
    {
        nav[0].classList.remove('md:py-2');
        nav[0].classList.add('md:py-6');
    }

}