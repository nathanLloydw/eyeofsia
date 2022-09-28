

<footer @class(["bg-white shadow-2xl","sticky bottom-0 z-50"=>$navigation_settings['footer_sticky']])>
    <div class="container mx-auto px-14 py-6">
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
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8">
        <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center">© 2022 <a href="#" class="hover:text-primary">{{ $company_details['company_name'] }}™</a>. All Rights Reserved.
        </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
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
</footer>
