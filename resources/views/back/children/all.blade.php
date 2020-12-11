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
                    <th>کد ملی</th>
                    <th>نام</th>
                    <th>تاریخ تولد</th>
                    <th>طرح</th>
                    <th>جنسیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($children as $child)
                    <tr>
                        <td>{{ $child->national_code }}</td>
                        <td><a href="{{ route("admin.children.edit",$child) }}">{{ $child->full_name }}</a></td>
                        <td>{{ $child->birth_date_fa_f }}</td>
                        <td>{{ $child->type_readable }}</td>
                        <td>{{ $child->sex_readable }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
