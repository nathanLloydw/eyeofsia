<section class="container mx-auto bg-white pt-16">

    <div class="flex items-center flex-col px-6 lg:px-14">
        <p tabindex="0" class="uppercase pb-4">{{ $component['label'] }}</p>
        <div class="lg:w-5/12 md:w-9/12">
            {!! $component['header'] !!}
        </div>

    </div>

    <div tabindex="0" aria-label="group of cards" class="focus:outline-none pt-10 lg:mt-20 flex flex-wrap justify-center gap-10 px-4">

        @foreach($component['features'] as $feature)

            @php ($icon = $feature['icon']->value())

            <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-5/12 pb-10 lg:pb-20">
                <div class="w-20 h-20 relative mr-5 shrink-0">
                    <div class="absolute top-0 right-0 bg-support rounded w-16 h-16 mt-2 mr-2"></div>
                    <div class="absolute text-white bottom-0 left-0 bg-primary rounded w-16 h-16 flex items-center justify-center mt-2 mr-2 p-4">
                        @includeIf("SVGs.$icon")
                    </div>
                </div>
                <div class="w-10/12">
                    <h4 tabindex="0">{{ $feature['feature_title'] }}</h4>
                    <p tabindex="0" class="pt-2">{{ $feature['feature_context'] }}</p>
                </div>
            </div>

        @endforeach

    </div>

</section>
