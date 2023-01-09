@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
  
        @if($page['id'] == 'e4cc9f35-d499-48a2-9ae1-4ff4a442ad5d')
            @include('components/navigation_hero_block')
        @endif
        @foreach($components as $component)

            @includeIf('components/' .$component['type'])

        @endforeach

    </div>

    @includeIf('layouts.footer')

@endsection
