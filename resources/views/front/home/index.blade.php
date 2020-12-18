@extends('layouts.app')

@section('content')
    @include("front.home.slider")
    @include("front.home.welcome")
    @include("front.home.landings")
    @include("front.home.about")
{{--    @include("front.home.numbers")--}}
{{--    @include("front.home.supporters")--}}
    @include("front.home.birthday")
    @include("front.home.monthlySupport")
    @include("front.home.affiliate")
@endsection
