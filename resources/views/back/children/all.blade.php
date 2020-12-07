@extends("back.layouts.app")
@section("content_header")
    @component("components.breadcrump",["items"=> ["Dashboard" =>route("admin.dashboard.index"),"current"=>"صف ها"]])
        <a href="{{ route("admin.children.create") }}" class="btn btn-info btn-sm">جدید</a>
    @endcomponent
@endsection

@php
    use Hsy\Html\Facades\Html;
@endphp
@section("content")
    <x-success></x-success>
    {{ $children->render() }}
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>نام</th>
                    <th>شماره</th>
                    <th>تعداد کاربر</th>
                    <th>فی ورودی</th>
                    <th>ضریب کسر اعتبار</th>
                </tr>
                </thead>
                <tbody>
                @foreach($children as $child)
                    <tr>
                        <td></td>
                        <td><a href="{{ route("admin.children.show",$child) }}">{{ $child->name }}</a></td>
                        <td>{{ $child->simotel_number }}</td>
                        <td>{{ $child->users_count }}</td>
                        <td>{{ $child->entrance_fee }}</td>
                        <td>{{ $child->credit_ratio }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
