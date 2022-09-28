<section class="container mx-auto relative px-6 lg:px-14 py-12 lg:py-24 flex flex-col lg:flex-row">

    <div class="w-full lg:w-2/3 rounded-lg overflow-hidden p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" title="map" src="https://maps.google.com/maps?q={{ $component['postcode'] }}&z=15&output=embed"></iframe>
        <div class="bg-white relative opacity-0 lg:opacity-100 flex flex-wrap py-6 rounded shadow-md">
            <div class="lg:w-1/2 px-6">
                <h6>ADDRESS</h6>
                <p class="mt-1">{{ $component['address'] }}</p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h6>EMAIL</h6>
                <a class="text-primary leading-relaxed w-full text-center inline-block mt-2">{{ $component['email'] }}</a>
                <h6 class="mt-2">PHONE</h6>
                <p class="leading-relaxed mt-2">{{ $component['phone'] }}</p>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/3 bg-white flex flex-col lg:ml-auto w-full lg:py-8 mt-8 lg:mt-0 lg:px-10">
        <form method="post" action=/!/forms/contact_form">
            @csrf
            <h4 class="mb-1">{{ $component['form_title'] }}</h4>
            <p class="mb-5">{{ $component['form_context'] }}</p>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="bg-gray-100 bg-opacity-50">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="bg-gray-100 bg-opacity-50">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="bg-gray-100 bg-opacity-50 h-32 resize-none leading-6"></textarea>
            </div>

            <input name="origin" class="hidden" value="{{ $component['type'] }}">
            <button class="primary w-full">{{ $component['form_confirmation_button'] }}</button>

            <p class="text-xs mt-3">{{ $component['form_confirmation_smallprint'] }}</p>
        </form>
    </div>

</section>