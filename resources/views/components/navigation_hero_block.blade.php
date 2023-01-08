<div id="navigation-hero-block" class="container mx-auto px-14 py-6 relative">

    <div class="absolute flex justify-center items-center w-full h-[83vh] my-auto z-10 left-0">
        <div class="h-fit text-[65px] sm:text-[75px] md:text-[100px] lg:text-[165px] bg-clip-text text-transparent opacity-50 bg-gradient-to-br from-cyan-300 to-rose-600">EYE OF SIA</div>
    </div>

    @if($navigation_settings['nav_controlled_header'])
        @foreach($navigation_settings['navigation_hero'] as $nav_hero_item)
            @if($loop->first)
                <img class="object-cover w-full h-[83vh]" src="{{ $nav_hero_item['image'][0]->url }}">
            @else
                <img class="hidden object-cover w-full h-[83vh]" src="{{ $nav_hero_item['image'][0]->url }}">
            @endif

        @endforeach
    @endif

</div>