@extends('layouts.admin')

@section('title', 'Таблицы')

{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is</p>--}}

{{--@endsection--}}

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
@php
    $folder = 'testcatalog';

if (is_dir($folder)) {

    if ($dh = opendir($folder) ) {
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..') {
                if (is_dir($folder . '/' . $file)) {
                    echo "<div class='col-md-2 m-3'> <img src='/images/folder.png' class='folder'> " . $file . "</div>";
                } else {
                    echo "<div class='col-md-2 m-3'> <img src='/images/file.png' class='folder'> " . $file. " ".
                     "</div>";
                }
            }

        }
        closedir($dh);
    }
}
@endphp

    </div>
    <!-- /page content -->
@endsection
