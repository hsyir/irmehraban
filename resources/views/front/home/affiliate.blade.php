{{--description--}}
@php($user =\Illuminate\Support\Facades\Auth::user())
@php($url = url("/") . ($user ? "?via=" . $user->id : ""))

<section class="p-5 bg-success  " id="affiliateSection">
    <div class="container text-white">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-6 my-5 mt-md-0">
                <img src="{{ asset("svg/network.svg") }}" alt="" class="w-100">
            </div>
            <div class="col-md-6">
                <h4 class="h3">
                    مشارکت و همکاری!
                </h4>
                <div class="text-justify">شما می توانید با به اشتراک گذاشتن لینک زیر در شبکه های اجتماعی و ارسال آن برای
                    دوستانتان به ما در انتشار این امر خیر و خداپسندانه کمک کنید.
                </div>
                <div class="form-group">
                    <input type="text" class="form-control text-left" value="{{ $url }}" readonly>
                </div>
                <affiliate :url="{{ json_encode($url) }}" :text="{{ json_encode("دوست گرامی، لطفا از این وب سایت دیدن کنید.") }}" class="float-left"></affiliate>
                <div class="clearfix"></div>
                <h6 class="h6 mt-4">ما به شما اطلاع خواهیم داد!</h6>
                <div class="text-justify">
                    @guest
                        اگر مایل هستید تا نتیجه اشتراک گذاری و کار خیر خود را ببینید، قبل از منتشر کردن لینک در سایت ثبت
                        نام کنید، و بعد از وارد شدن به سایت از این بخش اقدام به انتشار لینک کنید.
                        <div>
                            <a href="{{ route("login") }}" class="btn btn-outline-light float-left mr-1"> <i class="fa fa-user"></i>  ورود </a>
                            <a href="{{ route("register") }}" class="btn btn-outline-light float-left"> <i class="fa fa-user-plus"></i>  ثبت نام </a>
                        </div>
                    @else
                        کاربر گرامی، نتیجه کار خیرخواهانه شما را به شما اطلاع خواهیم داد.
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
