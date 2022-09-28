<section class="container mx-auto px-6 lg:px-14 py-12 lg:py-24 flex flex-wrap">

    <div class="lg:w-2/3 mx-auto">
        <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ $component['images'][0]['image']['permalink'] ?? 'https://dummyimage.com/820x340' }}">
            <div class="text-center relative z-10 w-full">
                <h2 class="mb-2">{{ $component['images'][0]['image_title'] }}</h2>
                <p>{{ $component['images'][0]['image_context'] }}</p>
                <a href="/{{ $component['images'][0]['learn_more_url'] }}" class="mt-3 text-primary inline-flex items-center">Learn More
                    @includeIf('SVGs.right-arrow')
                </a>
            </div>
        </div>
        <div class="flex flex-wrap -mx-2">
            <div class="px-2 w-1/2">
                <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                    <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ $component['images'][1]['image']['permalink'] ?? 'https://dummyimage.com/542x460' }}">
                    <div class="text-center relative z-10 w-full">
                        <h3 class="mb-2">{{ $component['images'][1]['image_title'] }}</h3>
                        <p>{{ $component['images'][1]['image_context'] }}</p>
                        <a href="/{{ $component['images'][1]['learn_more_url'] }}" class="mt-3 text-primary inline-flex items-center">Learn More
                            @includeIf('SVGs.right-arrow')
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-2 w-1/2">
                <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                    <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ $component['images'][2]['image']['permalink'] ?? 'https://dummyimage.com/542x420' }}">
                    <div class="text-center relative z-10 w-full">
                        <h3 class="mb-2">{{ $component['images'][2]['image_title'] }}</h3>
                        <p>{{ $component['images'][2]['image_context'] }}</p>
                        <a href="/{{ $component['images'][2]['learn_more_url'] }}" class="mt-3 text-primary inline-flex items-center">Learn More
                            @includeIf('SVGs.right-arrow')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>