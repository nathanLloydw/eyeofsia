<section class="container mx-auto px-10 lg:px-14 py-10 relative">
    <div class="text-center divide-white divide-y-[16px] [&>p]:leading-6 [&>p]:md:leading-8 [&>p]:md:px-44">
        {!! $component['header'] !!}
    </div>

    <h3 class="text-center pt-10 pb-4 border-b border-gray-300 font-light md:mx-60 text-gray-700">{{ $component['sub_title'] }}</h3>

    <div class="flex flex-wrap pt-16">
        @foreach($component['features'] as $feature)
            <div class="w-full md:w-1/3 grow py-4 md:p-4 md:py-0">

                <img class="cursor-pointer" src="{{$feature['feature_image']->url}}">
                <div class="text-center">
                    <h4 class="pt-8">{{$feature['feature_name']}}</h4>
                    <a class="block mt-8 text-sm bg-black hover:bg-primary px-6 py-4 rounded-full w-max text-white m-auto" href="{{$feature['feature_button_link']}}">{{ $feature['feature_button_text'] }}</a>
                </div>
            </div>

        @endforeach
    </div>

</section>