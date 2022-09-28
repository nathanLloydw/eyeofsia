<section class="container mx-auto px-6 lg:px-14 py-12 lg:py-24">

    @foreach($component['features'] as $feature)

        @php ($icon = $feature['icon']->value())

        <div class="flex items-center lg:w-3/5 mx-auto pb-5 lg:pb-10 mb-5 lg:mb-10 sm:flex-row flex-col @if (!$loop->last) border-b border-gray-200 @endif">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-support text-primary flex-shrink-0">
                @includeIf("SVGs.$icon",['size' => 'lg'])
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h4 class="mb-2">{{ $feature['feature_title'] }}</h4>
                <p class="lg:text-left">{{ $feature['feature_context'] }}</p>
                <a href="/{{ $feature['read_more_url'] }}" class="mt-3 text-primary inline-flex items-center">Learn More
                    @includeIf("SVGs.right-arrow")
                </a>
            </div>
        </div>

    @endforeach

    <a href="{{ $component['button_url'] }}" class="flex mx-auto w-fit mt-20 text-white bg-primary border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">{{ $component['button_text'] }}</a>

</section>