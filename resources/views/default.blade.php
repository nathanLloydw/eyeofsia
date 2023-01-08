@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        @include('components/navigation_hero_block')
        @foreach($components as $component)

            @includeIf('components/' .$component['type'])

        @endforeach

    </div>

    @includeIf('layouts.footer')

@endsection
