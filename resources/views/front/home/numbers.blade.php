{{--numbers--}}
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body ">
                        <h5 class="h5 text-center">تعداد فرزندان</h5>
                        <h3 class="h3 text-center">{{ \App\Models\Child::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="h5 text-center">تعداد حامیان</h5>
                        <h3 class="h3 text-center">{{ \App\Models\Support::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="h5 text-center">تعداد حمایت از فرزندان</h5>
                        <h3 class="h3 text-center">{{ \App\Models\ChildSupport::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="h5 text-center">فرزندان در انتظار حمایت</h5>
                        <h3 class="h3 text-center">550 نفر</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
