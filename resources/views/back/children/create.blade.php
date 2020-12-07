@extends("back.layouts.app")
@section("content_header")
    @component("components.breadcrump",
    ["items"=> ["Dashboard" =>route("admin.dashboard.index"),"Children" =>route("admin.children.index"),"current"=>"معرفی فرزند جدید"]])
    @endcomponent
@endsection

@php
    use Hsy\Html\Facades\Html;
@endphp
@section("content")
    <x-success></x-success>
    <x-errors></x-errors>
        @include("back.children._form",["action"=>"create"])
@endsection
