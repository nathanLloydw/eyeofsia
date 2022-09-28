<section class="w-full bg-white">
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
        <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="pb-12 text-center">

                    <div class="lg:w-2/3 m-auto">
                        {!! $component['header'] !!}
                    </div>

                    <form action="/!/forms/contact_form" method="post" class="p-2 mt-8 transition duration-500 ease-in-out transform border2 bg-gray-50 md:mx-auto rounded-xl sm:max-w-lg sm:flex">
                        @csrf
                        <input id="email" type="email" name="email" class="block flex-1 transition duration-500 ease-in-out transform border-none focus:ring-0" placeholder="Enter your email  ">
                        <input name="origin" class="hidden" value="{{ $component['type'] }}">
                        <button type="submit" class="primary text-base w-full lg:w-max mt-4 sm:mt-0 sm:ml-3">{{ $component['button_text'] }}</button>
                    </form>
                    <div class="sm:max-w-lg sm:flex md:mx-auto">
                        <p class="mt-3">
                            {{ $component['small_print'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
