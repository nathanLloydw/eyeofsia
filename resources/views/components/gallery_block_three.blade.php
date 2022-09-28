<section class="container mx-auto px-6 lg:px-14 py-12 lg:py-24">

    <div class="flex flex-col text-center w-full mb-20">
        {!! $component['header'] !!}

        <p class="lg:w-2/3 mx-auto mt-4">{{ $component['context'] }}</p>
    </div>
    <div class="flex flex-wrap -m-4">

        <div class="lg:w-1/3 sm:w-1/2 p-2 lg:p-4">
            <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $component['images'][0]['image']['permalink'] ?? 'https://dummyimage.com/600x360' }}">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h5 class="tracking-widest text-primary mb-1">{{ $component['images'][0]['image_subtitle'] }}</h5>
                    <h4 class="mb-3">{{ $component['images'][0]['image_title'] }}</h4>
                    <p class="leading-relaxed">{{ $component['images'][0]['image_context'] }}</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-2 lg:p-4">
            <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $component['images'][1]['image']['permalink'] ?? 'https://dummyimage.com/601x361' }}">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h5 class="tracking-widest text-primary mb-1">{{ $component['images'][1]['image_subtitle'] }}</h5>
                    <h4 class="mb-3">{{ $component['images'][1]['image_title'] }}</h4>
                    <p class="leading-relaxed">{{ $component['images'][1]['image_context'] }}</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-2 lg:p-4">
            <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $component['images'][2]['image']['permalink'] ?? 'https://dummyimage.com/603x363' }}">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h5 class="tracking-widest text-primary mb-1">{{ $component['images'][2]['image_subtitle'] }}</h5>
                    <h4 class="mb-3">{{ $component['images'][2]['image_title'] }}</h4>
                    <p class="leading-relaxed">{{ $component['images'][2]['image_context'] }}</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-2 lg:p-4">
            <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $component['images'][3]['image']['permalink'] ?? 'https://dummyimage.com/602x362' }}">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h5 class="tracking-widest text-primary mb-1">{{ $component['images'][3]['image_subtitle'] }}</h5>
                    <h4 class="mb-3">{{ $component['images'][3]['image_title'] }}</h4>
                    <p class="leading-relaxed">{{ $component['images'][3]['image_context'] }}</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-2 lg:p-4">
            <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $component['images'][4]['image']['permalink'] ?? 'https://dummyimage.com/605x365' }}">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h5 class="tracking-widest text-primary mb-1">{{ $component['images'][4]['image_subtitle'] }}</h5>
                    <h4 class="mb-3">{{ $component['images'][4]['image_title'] }}</h4>
                    <p class="leading-relaxed">{{ $component['images'][4]['image_context'] }}</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-2 lg:p-4">
            <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $component['images'][5]['image']['permalink'] ?? 'https://dummyimage.com/606x366' }}">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h5 class="tracking-widest text-primary mb-1">{{ $component['images'][5]['image_subtitle'] }}</h5>
                    <h4 class="mb-3">{{ $component['images'][5]['image_title'] }}</h4>
                    <p class="leading-relaxed">{{ $component['images'][5]['image_context'] }}</p>
                </div>
            </div>
        </div>
    </div>

</section>