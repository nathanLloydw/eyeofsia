window.addEventListener("load", function()
{
    // main menu
    let interactive_image_blocks = document.querySelectorAll(".interactive-img");

    interactive_image_blocks.forEach(interactive_image_block =>
    {
        interactive_image_block.addEventListener("click", () => {

            let interactive_image = interactive_image_block.querySelector('.interactive-img-text');

            if(interactive_image)
            {
                interactive_image.classList.toggle("opacity-0");
            }
        });
    });

});