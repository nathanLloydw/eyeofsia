
<nav @class(['px-10 lg:px-20 py-4 lg:py-2 items-center bg-white shadow-md',
             'sticky top-0 z-50'=>$navigation_settings['sticky'] ])>

    <div @class(['container mx-auto flex flex-wrap items-center',
            'justify-between'=>$navigation_settings['links_direction'] == 'right',
            'justify-between lg:justify-start'=>$navigation_settings['links_direction'] == 'left'])>

        <a href="/" class="flex items-center">
            @if($navigation_settings['company_logo'])
                <img src="{{ $navigation_settings['company_logo']['permalink'] }}" class="mr-3 h-6 sm:h-10">
            @endif
            <span class="self-center text-xl font-semibold whitespace-nowrap">{{ $company_details['company_name'] }}</span>
        </a>

        <button id="menu-btn" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg lg:hidden hover:text-gray-900 focus:outline-none">
            <span class="sr-only">Open main menu</span>
            @includeIf('SVGs.menu')
        </button>

        <div id="menu" class="hidden w-full lg:block lg:w-auto">
            <ul class="flex flex-col p-2 mt-4 bg-gray-50 rounded-lg border border-gray-100 lg:flex-row lg:space-x-6 lg:mt-0 lg:text-sm lg:font-medium lg:border-0 lg:bg-white">

                @foreach(Statamic::tag('nav:main_navigation') as $item)

                    @if(count($item['children']) > 0)
                        <li class="relative py-2 group lg:flex items-center">
                            <button class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 lg:w-auto">
                                {{ $item['title'] }}
                                @includeIf('SVGs.dropdown')
                            </button>
                            <!-- Dropdown menu -->
                            <div class="lg:absolute lg:top-6 w-full hidden group-hover:block z-10 lg:w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow">
                                <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">

                                    @foreach($item['children'] as $child)
                                        @if(!$loop->last)
                                            <li>
                                                <a href="{{ $child['url'] }}" class="block py-2 px-4 hover:bg-gray-100">{{ $child['title'] }}</a>
                                            </li>
                                        @else
                                </ul>
                                <div class="py-1">
                                    <a href="{{ $child['url'] }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">{{ $child['title'] }}</a>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </li>
                    @else
                        <li class="flex items-center w-full py-2">
                            <a href="{{ $item['url'] }}"
                                    @class(['w-full block py-2 pr-4 pl-3 rounded lg:p-0 inline-flex justify-between',
                                            'text-white lg:bg-transparent lg:text-primary bg-primary'=>$item['is_current'],
                                            'text-gray-700 hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary'=> !$item['is_current']])>

                                <span @class(['whitespace-nowrap','lg:hidden'=>isset($item['icon']) && $item['icon']->value()->value()])>{{ $item['title'] }}</span>

                                @if(isset($item['icon']) && $item['icon']->value()->value())
                                    @php ($icon = $item['icon']->value())
                                    @includeIf("SVGs.$icon")
                                @endif
                            </a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>

    </div>

</nav>
