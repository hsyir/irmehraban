@extends('layouts.app')

@section('content')

    @php
    $children = \App\Models\Child::paginate(20);
    @endphp

    {{--slider--}}
    <section class="  ">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <img class="d-block w-100"
                             src="https://via.placeholder.com/900x300/ffd0aa/808080?text=Iran-Mehraban"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="https://via.placeholder.com/900x300/fad05a/808080?text=Iran-Mehraban"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="https://via.placeholder.com/900x300/afd0aa/808080?text=Iran-Mehraban"
                             alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    {{--description--}}
    <section class="mt-2">
        <div class="container ">
            <div class="bg-white">
                <div class="row">
                    <div class="col-md-7 p-5">
                        <h4 class="h4">ایران مهربان، ایرانی مهربان</h4>
                        <p>
                            ای ایرانی، ای هم وطن، چشمان هزاران فرزند این سرزمین منتظر مهربانی شماست.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="https://via.placeholder.com/400x300/?text=TheImage" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--numbers--}}
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body ">
                            <h5 class="h5 text-center">تعداد ایتام تحت پوشش</h5>
                            <h3 class="h3 text-center">1300 نفر</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="h5 text-center">فرزندان در انتظار حمایت</h5>
                            <h3 class="h3 text-center">1500 نفر</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="h5 text-center">تعداد محسنین تحت حمایت</h5>
                            <h3 class="h3 text-center">700 نفر</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="h5 text-center">محسنین در انتظار حمایت</h5>
                            <h3 class="h3 text-center">1100 نفر</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--supperters--}}
    @php
            $faker = Faker\Factory::create("fa_IR");
    @endphp
    <section class="mt-5">
        <div class="container  ">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 ">
                            <h3 class="h3 pt-5 text-center">سخنان حامیان</h3>
                        </div>
                        <div class="col-md-12 ">
                            <div class="container">
                                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner " role="listbox">
                                        @for($i=1;$i<6;$i++)
                                            <div class="carousel-item {{ $i==1 ? "active" : ""}} p-5">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-2">
                                                        <img src="{{ asset("images/supporters_image_holder/{$i}.jpg") }}" alt=""
                                                             class="w-100 rounded-circle border">
                                                    </div>

                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="blockquote text-justify">{{ $faker->realText(600)  }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h6 class="h6 float-left pt-3  px-5">{{ $faker->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselContent" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselContent" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--quick navi--}}
    @php
        $cards=[
            [
                "title"=>"حمایت ماهیانه",
                "subject"=>"میخواهم از فرزندان طرح اکرام ایتام و محسنین حمایت ماهیانه داشته باشم.",
                "button-text"=>"اینجا کلیک کنید",
                "button-class"=>"btn-primary",
            ],
            [
                "title"=>"جشن تولد",
                "subject"=>"میخواهم در جشن تولد ایتام سهیم باشم.",
                "button-text"=>"اینجا کلیک کنید",
                "button-class"=>"btn-warning",
            ],
            [
                "title"=>"حمایت خاص",
                "subject"=>"میخواهم فرزندانی که دارای شرایط خاص هستند کمک موردی انجام بدهم.",
                "button-text"=>"اینجا کلیک کنید",
                "button-class"=>"btn-info",
            ],
            [
                "title"=>"درخت آرزوها",
                "subject"=>"میخواهم آرزوی یک یتیم را براورده کنم",
                "button-text"=>"اینجا کلیک کنید",
                "button-class"=>"btn-danger",
            ]
        ]
    @endphp
    <section class="mt-5 bg-dark p-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($cards as $card)
                    <div class="col-md-3 mb-3 ">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="h4"> {{ $card["title"] }}</h4>
                                </div>
                                <div>{{ $card["subject"] }}</div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn {{ $card["button-class"] }}">{{ $card["button-text"] }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--children support--}}
    <section class="mt-5 mb-5">
        <div class="container-fluid">
            <div class="row pt-5 ">
                <div class="col-md-12">
                    <div class="bg-white p-3">
                        <monthly-children-support></monthly-children-support>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--footer--}}
    <section class="bg-dark p-5 ">
        <div class="p-5"></div>
    </section>

@endsection
