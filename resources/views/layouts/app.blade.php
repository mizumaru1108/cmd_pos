@extends('layouts.base')

@section('stylePerPage')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@yield('moreCustomStyle')
@endsection


@section('body')
<x-navbar />
<div class="wrapper">
    <x-sidebar />
    <div id="content">
        @yield('content')
    </div>
</div>
@endsection

@section('jsPerPage')
<script src="{{ asset('js/app.js') }}"></script>
@stack('moreCustomJs')
@endsection
