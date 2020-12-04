@extends('layouts.app')

@section('content')
    <section class="container  ">
        <div class="row">
            <div class="col-md-12 ">
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
        </div>
    </section>

    <section class="container  ">
        <div class="row">
            <div class="col-md-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
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
            </div>
        </div>
    </section>

    <section class="bg-dark pt-5">
        <div class="container text-white ">
            <div class="row ">
            </div>

            <div class="row">

                <div class="col-md-6 ">
                    <h3 class="h3  text-center">سخنان حامیان</h3>
                </div>
                <div class="col-md-6 pt-5">
                    <div id="customerQuotes" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ol class="carousel-indicators">
                            <li data-target="#customerQuotes" data-slide-to="0" class="active"></li>
                            <li data-target="#customerQuotes" data-slide-to="1"></li>
                            <li data-target="#customerQuotes" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <img class="d-block w-100"
                                     src="https://via.placeholder.com/900x150/343a40/343a40?text= -"
                                     alt="First slide">
                                <div class="carousel-caption ">
                                    <div class="text-center">
                                        <h6 class="h6">حسین یغمایی</h6>
                                        <small>طراح وب</small>
                                        <p>من خیلی خوشحال هستم که میتونم نقض مفیدی دالشته باشم و همیشه قدر این افتخار بزرگ رو
                                            میدونم
                                            در زندگیم</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                     src="https://via.placeholder.com/900x150/343a40/343a40?text= - "
                                     alt="First slide">
                                <div class="carousel-caption">
                                    <div class="text-center">
                                        <h6 class="h6">حسین یغمایی</h6>
                                        <small>طراح وب</small>
                                        <p>من خیلی خوشحال هستم که میتونم نقض مفیدی دالشته باشم و همیشه قدر این افتخار بزرگ رو
                                            میدونم
                                            در زندگیم</p>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                     src="https://via.placeholder.com/900x150/343a40/343a40?text=-"
                                     alt="First slide">
                                <div class="carousel-caption">
                                    <div class="text-center">
                                        <h6 class="h6">حسین یغمایی</h6>
                                        <small>طراح وب</small>
                                        <p>من خیلی خوشحال هستم که میتونم نقض مفیدی دالشته باشم و همیشه قدر این افتخار بزرگ رو
                                            میدونم
                                            در زندگیم</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


@endsection
