<section class="container mx-auto px-6 lg:px-14 py-6 lg:py-12 flex flex-wrap">

    @if($component['header'] && $component['context'])
        <div class="flex w-full mb-10 flex-wrap">

            <div class="lg:w-1/3 lg:mb-0 mb-4">
               {!! $component['header'] !!}
            </div>

            <p class="px-12 lg:w-2/3 m-auto">{{ $component['context'] }}</p>
        </div>
    @endif

    <div class="flex flex-wrap">
        <div class="flex flex-wrap xl:w-1/2">
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block aspect-[1.67/1]" src="{{ $component['image_one']['permalink'] ?? 'https://dummyimage.com/500x300' }}">
            </div>
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block aspect-[1.67/1]" src="{{ $component['image_two']['permalink'] ?? 'https://dummyimage.com/501x301' }}">
            </div>
            <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block aspect-[1.67/1]" src="{{ $component['image_three']['permalink'] ?? 'https://dummyimage.com/600x360' }}">
            </div>
        </div>
        <div class="flex flex-wrap xl:w-1/2">
            <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block aspect-[1.67/1]" src="{{ $component['image_four']['permalink'] ?? 'https://dummyimage.com/601x361' }}">
            </div>
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block aspect-[1.67/1]" src="{{ $component['image_five']['permalink'] ?? 'https://dummyimage.com/502x302' }}">
            </div>
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block aspect-[1.67/1]" src="{{ $component['image_six']['permalink'] ?? 'https://dummyimage.com/503x303' }}">
            </div>
        </div>
    </div>

</section>