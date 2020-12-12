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
