@extends('layouts.admin')

@section('title', 'Таблицы')

{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is</p>--}}

{{--@endsection--}}

@section('content')

{{--<ul class="nav child_menu">--}}
    @foreach($categories as $category)
{{--    <li><a href="/catalog">--}}
            {{ $category->title }}
        </a></li>
    @endforeach
{{--</ul>--}}

<!-- /page content -->
@endsection
