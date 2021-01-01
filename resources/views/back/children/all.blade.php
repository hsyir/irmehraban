@extends("back.layouts.app")
@section("content_header")
    @component("components.breadcrump",["items"=> ["Dashboard" =>route("admin.dashboard.index"),"current"=>"فرزندان"]])
        <a href="{{ route("admin.children.create") }}" class="btn btn-info btn-sm">جدید</a>
    @endcomponent
@endsection

@php
    use Hsy\Html\Facades\Html;
@endphp

@section("content")
    <x-success></x-success>
    <div class="card">
        <div class="card-body">
            <table class="table childrenTable">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>کد ملی</th>
                    <th>تاریخ تولد</th>
                    <th>اولویت</th>
                    <th>طرح</th>
                </tr>
                </thead>
                <tbody>
               {{-- @foreach($children as $child)
                    <tr>
                        <td>{{ $child->national_code }}</td>
                        <td><a href="{{ route("admin.children.edit",$child) }}">{{ $child->full_name }}</a></td>
                        <td>{{ $child->birth_date_fa_f }}</td>
                        <td>{{ $child->type_readable }}</td>
                        <td>{{ $child->priority }}</td>
                        <td>{{ $child->sex_readable }}</td>
                    </tr>
                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            var table = $('.childrenTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.children.getList') }}",
                columns: [
                    {data: 'child_name_str', name: 'children.last_name'},
                    {data: 'child_national_code', name: 'children.national_code'},
                    {data: 'child_birth_date', name: 'children.birth_date'},
                    {data: 'child_priority'},
                    {data: 'child_type_str'},
                ]
            });
        });
    </script>

@endpush
