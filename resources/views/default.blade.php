@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')

    @foreach($components as $component)

        @includeIf('components/' .$component['type'])

    @endforeach

    @includeIf('layouts.footer')

@endsection
