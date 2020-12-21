@extends("back.layouts.app")
@section("content_header")
    @component("components.breadcrump",["items"=> ["Dashboard" =>route("admin.dashboard.index"),"current"=>"حمایت های ماهیانه"]])
    @endcomponent
@endsection
@php
    use Hsy\Html\Facades\Html;
@endphp
@section("content")


    <x-success></x-success>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($support->children as $child)
                            <tr>
                                <td>{{$child->first_name}}</td>
                                <td>{{$child->last_name}}</td>
                                <td>{{$child->national_code}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
