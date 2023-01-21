<section class="container mx-auto px-6 lg:px-14 py-12 lg:py-24 flex flex-wrap">

    @foreach($component['testimonials'] as $testimonial)

        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4 grow max-w-[50%] m-auto">
            <div class="h-full text-center">
                <img class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-primary bg-primary" src="{{ $testimonial['individual_thumbnail'] }}">
                <p>{{ $testimonial['testimonial'] }}</p>
                <span class="inline-block h-1 w-10 rounded bg-primary mt-6 mb-4"></span>
                <h5>{{ $testimonial['individual_name'] }}</h5>
                <p class="text-gray-500">{{ $testimonial['individual_title'] }}</p>
            </div>
        </div>

    @endforeach

</section>