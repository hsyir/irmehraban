@extends('layouts.app')

@section('content')

    <section class="vh-100 bg2 pt-5">
        <div class="container">
            <div class="card">
                <div class="card-header">درباره ما ...</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="h4">پویش شهر مهربان من</h1>
                            <p>پویش شهر مهربان من، عده ای از جوانان شهر کاشمر هستند که برای جذب حامیان طرح اکرام ایتام و
                                محسنین فعالیت های خیر خواهانه دارند. این وب سایت، راهی آسان و سریع برای حمایت شما از
                                ایتام نیازمند و محسنین فراهم میکند تا فقط با چند کلیک بتوانید به جمع بزرگ خیرین ما
                                بپیوندید. </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset("images/ihelp.png") }}" alt="پویش جوانان شهر مهربان من" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
