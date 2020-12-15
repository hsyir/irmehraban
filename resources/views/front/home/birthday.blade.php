@php
    $children = \App\Models\Child::birthday()
        ->select(\Illuminate\Support\Facades\DB::raw("* , DATE_FORMAT(`birth_date`,'%m-%d') as birth_date_formatted"))
        ->orderBy("birth_date_formatted","ASC")->get()
@endphp


<section id="birthday" class="bg-primary p-5">
    <div class="container ">
        <a name="birthday"></a>
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card  shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="h3">
                                    به جشن تولد فرزندان ما خوش آمدید!
                                </h4>
                                <p>
                                    در روز های پیش رو تولد فرزندانمان را با کمک شما جشن خواهیم گرفت، شما میتوانید برای تهیه هدیه مناسب فرزندان با ما در تماس باشید.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>نام فرزند</th>
                                        <th>سن</th>
                                        <th>تاریخ تولد</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($children as $child)
                                        <tr>
                                            <td>{{$child->name}}</td>
                                            <td>{{$child->age}}</td>
                                            <td>{{$child->birth_date_fa_f}}</td>
                                            <td>
                                                @foreach($child->tags->pluck("name") as $tag)
                                                    <div class="badge badge-secondary"><strong class="text-white">{{$tag}}</strong></div>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
