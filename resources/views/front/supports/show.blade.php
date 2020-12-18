@extends('layouts.app')

@section('content')
    <section class="mb-5 ">
        <div class="container mb-5 pb-5 mb-5">
            <div class="card shadow mt-5 mb-5">
                <div class="card-body pb-0">
                    <h4>خیر گرامی، از شما به خاطر این اقدام نیک و مبارک ممنونیم ..</h4>
                    <p>همکاران ما در واحد اکرام ایتام و محسنین به زودی با شما (از طریق شماره ای که اعلام کرده اید) تماس خواهند گرفت و نحوه واریز وجه و حمایت را به شما توضیح خواهند داد.</p>
                    <div><strong>نام خیر:</strong> {{ $support->supporter_name }} </div>
                    <div><strong>شماره موبایل:</strong>{{ $support->supporter_mobile }}</div>
                    <div><strong>فرزندان معنوی شما:</strong></div>
                    <div>
                        <table class="table stripped hover">
                            <thead>
                            <tr>
                                <th>نام فرزند</th>
                                <th>سن</th>
                                <th>تولد</th>
                                <th>شهر</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($support->children as $child)
                                <tr>
                                    <td>{{ $child->full_name }}</td>
                                    <td>{{ $child->age  }}</td>
                                    <td>{{ $child->birth_date_fa->format(" %d %B %Y")  }}</td>
                                    <td>{{ $child->city  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row  justify-content-center">
                        <div class="col-6 col-sm-6 col-md-3 pt-5">
                            <img src="{{ asset("svg/kindness.svg") }}" alt="" class="w-100">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
