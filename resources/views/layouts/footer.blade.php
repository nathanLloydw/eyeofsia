

<footer @class(["sticky bottom-0 z-50"=>$navigation_settings['footer_sticky'],
                "bg-white shadow-2xl"=>!$navigation_settings['funky_footer']])>

    @if($navigation_settings['funky_footer'])
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" class="fill-support opacity-70" />
                <use xlink:href="#gentle-wave" x="48" y="3" class="fill-support opacity-50" />
                <use xlink:href="#gentle-wave" x="48" y="5" class="fill-support opacity-30" />
                <use xlink:href="#gentle-wave" x="48" y="7" class="fill-support" />
            </g>
        </svg>
    @endif

    <div @class(["bg-support"=>$navigation_settings['funky_footer']])>
        <div class="container mx-auto px-14 py-6">
            @if($navigation_settings['show_footer_navigation'])
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="#" class="flex items-center px-2 w-max">
                            @if($navigation_settings['footer_company_logo'])
                                <img src="{{ $navigation_settings['footer_company_logo']['permalink'] }}" class="mr-3 h-8">
                            @endif
                            <span class="self-center text-2xl font-semibold whitespace-nowrap">{{ $company_details['company_name'] }}</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        @foreach(Statamic::tag('nav:footer_navigation') as $item)

                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">{{ $item['title'] }}</h2>
                                @if(count($item['children']) > 0)
                                    <ul class="text-gray-600">
                                        @foreach($item['children'] as $child_item)
                                            <li class="mb-4 hover:text-primary">
                                                <a href="{{ $child_item['url'] }}" class="hover:text-primary">{{ $child_item['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                        @endforeach

                    </div>
                </div>
            @endif

            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8">
            <div class="flex flex-col sm:flex-row items-center sm:justify-between">
        <span class="text-sm text-gray-500 text-center">© 2022 <a href="#" class="hover:text-primary">{{ $company_details['company_name'] }}™</a>. All Rights Reserved.
        </span>
                <div class="flex mt-4 space-x-6 justify-center sm:mt-0">
                    <a href="{{ $company_details['facebook'] }}" class="text-gray-500 hover:text-gray-900">
                        @includeIf('SVGs.facebook')
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="{{ $company_details['instagram'] }}" class="text-gray-500 hover:text-gray-900">
                        @includeIf('SVGs.instagram')
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="{{ $company_details['twitter'] }}" class="text-gray-500 hover:text-gray-900">
                        @includeIf('SVGs.twitter')
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="{{ $company_details['linkedin'] }}" class="text-gray-500 hover:text-gray-900">
                        @includeIf('SVGs.linkedIn')
                        <span class="sr-only">LinkedIn page</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>
