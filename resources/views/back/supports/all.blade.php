@extends("back.layouts.app")
@section("content_header")
    @component("components.breadcrump",["items"=> ["Dashboard" =>route("admin.dashboard.index"),"current"=>"صف ها"]])
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
                    <th>کد ملی</th>
                    <th>نام</th>
                    <th>تاریخ تولد</th>
                    <th>طرح</th>
                    <th>اولویت</th>
                    <th>جنسیت</th>
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
