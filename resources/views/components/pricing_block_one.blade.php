<section class="container mx-auto lg:flex items-center justify-between px-6 lg:px-10 py-6">

    <div class="lg:w-1/2 w-full">
        <p class="mb-3">{{ $component['label'] }}</p>
        {!! $component['header'] !!}

        <p class="mt-5">{{ $component['description'] }}</p>

        <div class="w-56 m-auto">
            <div class="bg-gray-100 shadow rounded-full flex items-center mt-5 lg:mt-10 rounded-full">
                <div class="bg-gray-100 focus:outline-none text-base leading-none text-gray-400 rounded-full py-4 px-6" id="monthly">Monthly</div>
                <div class="bg-primary focus:outline-none text-base leading-none text-white rounded-full py-4 px-6 m-1" id="annually">Annually</div>
            </div>
        </div>
    </div>

    <div class="xl:w-1/2 lg:w-7/12 relative w-full mt-6 lg:mt-0 md:px-8">

        <img src="https://i.ibb.co/0n6DSS3/bgimg.png" class="absolute w-full -ml-12 mt-24" alt="background circle images" />

        @foreach($component['plans'] as $plan)

            <div class="bg-support cursor-pointer shadow rounded-lg mt-3 flex relative z-30 group relative">
                <div class="absolute hidden group-hover:block w-2.5 h-full bg-primary rounded-tl-md rounded-bl-md"></div>
                <div class="w-full px-8 py-4 lg:p-8">
                    <div class="md:flex items-center justify-between">
                        <h4>{{ $plan['title'] }}</h4>
                        <p class="text-2xl mt-2 lg:mt-0 font-semibold text-gray-800">£{{ $plan['price'] }}<span class="font-normal text-base">/mo</span></p>
                    </div>
                    <p class="md:w-80 text-base mt-4">{{ $plan['description'] }}</p>
                </div>
            </div>
        @endforeach

    </div>

</section>
        
    