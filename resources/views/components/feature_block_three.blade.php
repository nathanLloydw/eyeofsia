<section class="container mx-auto px-6 lg:px-14 py-12 lg:py-24">

    {!! $component['header'] !!}

    <div class="flex flex-wrap mt-10 lg:mt-20 -mb-10 space-y-6 md:space-y-0">

        @foreach($component['features'] as $feature)

            @php ($icon = $feature['icon']->value())

            <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex flex-wrap items-center justify-center rounded-full bg-support text-primary flex-shrink-0 my-auto">
                    @includeIf("SVGs.$icon")
                </div>
                <div class="flex-grow flex flex-col pl-6">
                    <h4 class="mb-2">{{ $feature['feature_title'] }}</h4>
                    <p>{{ $feature['feature_context'] }}</p>
                    <a href="/{{ $feature['read_more_url'] }}" class="mt-3 text-primary inline-flex items-center self-center">Learn More
                        @includeIf('SVGs.right-arrow')
                    </a>
                </div>
            </div>

        @endforeach

    </div>

</section>