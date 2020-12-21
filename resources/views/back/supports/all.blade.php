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
    {{ $supports->render() }}
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>نام حامی</th>
                    <th>شماره موبایل</th>
                    <th>تعداد فرزند انتخاب شده</th>
                </tr>
                </thead>
                <tbody>
                @foreach($supports as $support)
                    <tr>
                        <td><a href="{{ route("admin.supports.show",$support) }}">{{ $support->supporter_name }}</a></td>
                        <td>{{ $support->supporter_mobile }}</td>
                        <td>{{ $support->children_count }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
