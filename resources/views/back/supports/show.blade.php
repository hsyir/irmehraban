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

                    <div>
                        <strong>نام حامی:</strong> {{ $support->supporter_name }}
                    </div>
                    <div>
                        <strong>موبایل حامی:</strong> {{ $support->supporter_mobile }}
                    </div>
                    <div>
                        <strong>کاربر معرف:</strong> {{ $support->affiliate->name }}
                    </div>
                    <div>
                        <strong>کاربر ثبت کننده:</strong>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    اطلاعات فرزندان
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>کد ملی</th>
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
