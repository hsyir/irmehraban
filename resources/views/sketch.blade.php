@extends('layouts.app')

@section('content')
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
                        <div class="col-md-12 p-5">
                            <div class="container">
                                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner m-5" role="listbox">
                                        @for($i=1;$i<6;$i++)
                                            <div class="carousel-item {{ $i==1 ? "active" : ""}} p-5">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-2">
                                                        <img src="{{ asset("images/supporters_image_holder/{$i}.jpg") }}" alt=""
                                                             class="w-100 rounded-circle border">
                                                    </div>

                                                    <div class="col-md-10">
                                                        <h4 class="h4">{{ $faker->name  }}</h4>
                                                        <p class="blockquote">{{ $faker->realText(600)  }}</p>
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
    <section class="mt-5">
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
        <div class="container">

            <div>
                <h3>حمایت ماهیانه از فرزندان ایتام و محسنین</h3>
                <p>شما میتوانید به صورت ماهیانه از فرزندان ایتام و محسنین با حداقل مبلغ 10 هزار تومان حمایت کنید.</p>
                <p>لطفا مراحل زیر را دنبال کنید</p>
            </div>


            <div class="p-3">

                <div>
                    <h4># مرحله 1: انتخاب فرزندان</h4>
                    <p>لطفا از لیست زیر فرزندان مورد نظر خود را انتخاب کنید:</p>
                </div>

                @php($children=\App\Models\Child::limit(20)->get())
                <div class="row">
                    @foreach($children as $child)
                        <div class="col-sm-6 col-md-4 mb-4 col-lg-3">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-4 col-sm-5 col-md-6">
                                            <img src="{{ $child->image_url }}" class="w-100 border " alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class=" text-primary"><span class="h4">{{ $child->name }}</span>
                                                / {{ $child->age }} ساله
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div>

                                            </div>
                                            <div>
                                                <strong>شهر:</strong> کاشمر
                                            </div>
                                            <p class="p-2">
                                                {{ $child->about }}
                                            </p>
                                            <div>
                                                @foreach($child->tags as $tag)
                                                    <div class="badge badge-secondary text-white">
                                                        {{ $tag->name }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-outline-primary float-left"><i
                                            class="fa fa-plus"> </i>
                                        افزودن به لیست مهربانی
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


            </div>

            <div class="p-3">
                <h4 class="h4"># مرحله 2: تکمیل فرم اطلاعات تماس</h4>
                <strong>
                    شما تعداد
                    <span class=""> 5 فرزند </span>
                    انتخاب کرده اید.
                </strong>
                <p>لطفا فرم زیر را تکمیل کنید:</p>
                <p>بعد از ثبت این فرم همکاران ما در واحد اکرام ایتام با شما تماس خواهند گرفت.</p>

                <form action="">
                    <div class="form-group">
                        <label for="name">نام و نام خانوادگی:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">شماره موبایل:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">نحوه آشنایی شما با این وبسایت:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-left">ثبت اطلاعات</button>
                    </div>
                </form>

            </div>

        </div>
    </section>

    {{--footer--}}
    <section class="bg-dark p-5 ">
        <div class="p-5"></div>
    </section>

@endsection
