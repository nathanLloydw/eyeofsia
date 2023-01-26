<section class="container mx-auto lg:flex py-6 px-6 lg:px-14 text-center">

    <div @class(['w-full h-[500px] bg-cover flex justify-center items-center',
                 'rounded-lg'=>$component['rounded_corners'],
                 'bg-fixed'=>$component['parallax']])
         style="background-image: url('{{$component['hero_image']->url}}')">

        <h2 class="h-min text-white font-light">{{$component['title']}}</h2>

    </div>
</section>