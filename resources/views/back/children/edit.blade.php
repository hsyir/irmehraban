@extends("back.layouts.app")
@section("content_header")
    @component("components.breadcrump",
    ["items"=> ["Dashboard" =>route("admin.children.index"),"Users" =>route("admin.children.index"),"current"=>"ویرایش اطلاعات فرزند"]])
    @endcomponent
@endsection

@php
    use Hsy\Html\Facades\Html;
@endphp
@section("content")
    <x-success></x-success>
        @include("back.children._form",["action"=>"edit"])
@endsection
