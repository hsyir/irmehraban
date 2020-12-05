@extends('layouts.app')

@section('content')
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

    <section class="mt-2">
        <div class="container  ">
            <div class="bg-white">
                <div class="row">
                    <div class="col-md-12 ">
                        <h3 class="h3 pt-5 text-center">سخنان حامیان</h3>
                    </div>
                    <div class="col-md-12 p-5">
                        <div class="container">
                            <div id="carouselContent" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active text-center p-4">
                                        <p class="blockquote">من خیلی خوشحالم که شما رو دارم</p>
                                    </div>
                                    <div class="carousel-item text-center p-4">

                                        <p>من حسین یغمایی هستم و خیلی خوشحالم که حامی هستم</p>
                                    </div>
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
    </section>


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
            ]
        ]
    @endphp

    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($cards as $card)
                    <div class="col-md-3 mb-3 ">
                        <div class="card h-100">
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

    <section class="mt-5 mb-5">
        <div class="container">
            @php($children=\App\Models\Child::limit(20)->get())
            <div class="row">
                @foreach($children as $child)
                    <div class="col-sm-6 col-md-4 mb-2 col-lg-3">
                        <div class="card">
                            <div class="card-header">{{ $child->name }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 col-sm-5 col-md-6">
                                        <img src="{{ $child->image_url }}" class="w-100" alt="">
                                    </div>
                                    <div class="col-8 col-sm-7 col-md-6">
                                        <div>
                                            {{ $child->age }} ساله
                                        </div>
                                        <div>
                                            <strong>شهر:</strong> کاشمر
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-outline-primary float-left"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row my-3">
                <div class="col">
                    <div class="text-center">

                        <button class="btn btn-outline-primary ">مشاهده موارد بیشتر</button>

                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                شما تا کنون <strong>25 فرزند</strong> را به لیست مهر و محبتتان افزوده اید.

                                <button class="btn btn-sm btn-primary float-left">برای ادامه اینجا کلیک کنید</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-dark p-5 ">
        <div class="p-5"></div>
    </section>

@endsection
