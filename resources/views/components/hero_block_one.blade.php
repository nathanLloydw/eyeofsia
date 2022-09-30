<section class="container mx-auto lg:flex py-6 px-6 lg:px-14">

    @if($component['image_location']->value() == 'left')
        <div class="w-full lg:w-1/2 lg:px-8 flex items-center">
            <img class="m-auto" src="{{ $component['hero_image']['permalink'] }}">
        </div>
    @endif

    <div class="w-full lg:w-1/2 lg:px-10 m-auto flex flex-col items-center py-6">
        <div class="lg:flex justify-center items-center flex-col mb-5 space-y-2">
            {!! $component['header'] !!}
            <p class="mt-4">{!! $component['description'] !!}</p>
        </div>

        <div class="flex space-x-4 justify-center items-center">
            @foreach($component['buttons'] as $button)
                @if($loop->iteration % 2 != 0)
                    <button class="primary lg:py-3"><a href="{{ $button['button_link'] }}">{{ $button['button_text'] }}</a></button>
                @else
                    <button class="secondary lg:py-3"><a href="{{ $button['button_link'] }}">{{ $button['button_text'] }}</a></button>
                @endif
            @endforeach
        </div>
    </div>

    @if($component['image_location']->value() == 'right')
        <div class="w-full lg:w-1/2 px-6 lg:px-8 flex items-center">
            <img class="m-auto" src="{{ $component['hero_image']['permalink'] }}">
        </div>
    @endif

</section>