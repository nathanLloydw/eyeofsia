<section class="container mx-auto px-6 lg:px-14 py-6 lg:py-12 flex flex-wrap items-center">

    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        {!! $component['header'] !!}
        <p class="mt-4">{{ $component['description'] }}</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-support rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h3 class="mb-5">{{ $component['form_title'] }}</h3>

        <form method="post" action="/!/forms/contact_form">
            @csrf
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Full Name</label>
                <input type="text" id="name" name="name" class="bg-white">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="bg-white">
            </div>

            <input name="origin" class="hidden" value="{{ $component['type'] }}">
            <button type="submit" class="primary w-full">{{ $component['form_confirmation_button'] }}</button>
        </form>

        <p class="text-xs mt-3">{{ $component['form_information'] }}</p>
    </div>

</section>