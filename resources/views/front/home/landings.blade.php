{{--quick navi--}}
@php
    $cards=[
        [
            "title"=>"حمایت ماهیانه",
            "subject"=>"میخواهم از فرزندان طرح اکرام ایتام و محسنین حمایت ماهیانه داشته باشم.",
            "button-text"=>"اینجا کلیک کنید",
            "button-class"=>"btn-primary ",
            "href"=>"#monthlySupport"
        ],
        [
            "title"=>"جشن تولد",
            "subject"=>"میخواهم در جشن تولد ایتام سهیم باشم.",
            "button-text"=>"اینجا کلیک کنید",
            "button-class"=>"btn-warning",
            "href"=>"#birthday"
        ],
        [
            "title"=>"حمایت خاص",
            "subject"=>"میخواهم فرزندانی که دارای شرایط خاص هستند کمک موردی انجام بدهم.",
            "button-text"=>"اینجا کلیک کنید",
            "button-class"=>"btn-info coming-soon",
        ],
        [
            "title"=>"درخت آرزوها",
            "subject"=>"میخواهم آرزوی یک یتیم را براورده کنم",
            "button-text"=>"اینجا کلیک کنید",
            "button-class"=>"btn-danger coming-soon",
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
                            <a href="{{ $card["href"] ?? "#" }}" class="btn {{ $card["button-class"] }}">{{ $card["button-text"] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
