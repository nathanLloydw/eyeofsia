<section class="container mx-auto relative px-6 lg:px-14 py-12 lg:py-24">
    <div class="flex flex-col text-center w-full mb-12">

        {!! $component['form_title'] !!}
        <p class="lg:w-2/3 mx-auto mt-4">{{ $component['form_context'] }}</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
            <form class="flex flex-wrap" method="post" action="/!/forms/contact_form">
                @csrf
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-100 bg-opacity-50">
                    </div>
                </div>
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-100 bg-opacity-50">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="bg-gray-100 bg-opacity-50 h-32 resize-none leading-6"></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <input name="origin" class="hidden" value="{{ $component['type'] }}">
                    <button class="primary flex mx-auto">{{ $component['form_confirmation_button'] }}</button>
                </div>
            </form>
            <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <a class="text-primary">{{ $component['email'] }}</a>
                <p class="my-5">{{ $component['address'] }}</p>
                <span class="inline-flex">
                    <a href="{{ $company_details['facebook'] }}" class="text-gray-500 cursor-pointer">
                      @includeIf('SVGs.facebook')
                    </a>
                    <a href="{{ $company_details['twitter'] }}" class="ml-4 text-gray-500 cursor-pointer">
                      @includeIf('SVGs.twitter')
                    </a>
                    <a href="{{ $company_details['instagram'] }}" class="ml-4 text-gray-500 cursor-pointer">
                      @includeIf('SVGs.instagram')
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>