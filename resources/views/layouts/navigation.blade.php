<nav class="px-20 py-6 items-center bg-white shadow-md">
    <div class="flex justify-between max-w-screen-xl m-auto">
        <h1 class="text-xl text-gray-800 font-bold">{{ $company_details['company_name'] }}</h1>
        <div class="flex items-center">
            <div class="flex items-center">
                @includeIf('SVGs.search')
                <input class="ml-2 outline-none bg-transparent font-" type="text" name="search" id="search" placeholder="Search..." />
            </div>
            <ul class="flex items-center space-x-6">

                @foreach(Statamic::tag('nav:main_navigation') as $item)

                    @if($item['icon_only']->value())

                        @php ($icon = $item['icon']->value())
                        @includeIf("SVGs.$icon")

                    @else
                        <li class="font-semibold text-gray-700 cursor-pointer">
                            <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                        </li>
                    @endif

                @endforeach

            </ul>
        </div>
    </div>
</nav>