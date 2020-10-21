@extends('layouts.admin')

@section('title', 'Таблицы')

{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is</p>--}}

{{--@endsection--}}

@section('content')
    <div class="right_col" role="main">
    <h3>{{ $title }}</h3>
        @foreach($post as $data)
            <li>
            {{ $data->title }}

            </li>
        @endforeach
    <!-- /page content -->
    </div>
@endsection
