@extends('layout.home-layout')

@section('header')
    <title>Easy Trademarks - Home</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/home-page.css') }}">
@endsection


@section('content')
<div class="container-fluid px-0">
    <!-- landing part -->
   @include('./Home_components/Landing_part')

    <div class="sections">
        
        @include('./Home_components/section_1')

        @include('./Home_components/section_2')

        @include('./Home_components/section_3')

        @include('./Home_components/section_4')

        @include('./Home_components/section_5')

        @include('./Home_components/section_6')

        @include('./Home_components/section_7')

    </div> 
</div>
@endsection