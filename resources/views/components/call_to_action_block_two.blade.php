<section class="container mx-auto px-6 lg:px-14 py-12 lg:py-24">

    <div class="flex flex-col text-center w-full mb-12">
        {!! $component['header'] !!}
        <p class="lg:w-2/3 mx-auto mt-4">{{ $component['description'] }}</p>
    </div>

    <form method="post" action="/!/forms/contact_form">
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
            @csrf
            <div class="relative flex-grow w-full">
                <label for="name" class="leading-7 text-sm text-gray-600">Full Name</label>
                <input type="text" id="name" name="name" class="bg-gray-100 bg-opacity-50">
            </div>
            <div class="relative flex-grow w-full">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="bg-gray-100 bg-opacity-50">
            </div>

            <input name="origin" class="hidden" value="{{ $component['type'] }}">
            <button type="submit" class="primary py-1 leading-8">{{ $component['form_confirmation_button'] }}</button>
        </div>
    </form>

</section>