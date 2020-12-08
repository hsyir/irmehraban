<form action="{{ route('admin.children.store')  }}"
      method="post" enctype="multipart/form-data">
    @csrf
    {{ Html::hidden()->name('queue_id')->value($child->id)->when( $action=='edit') }}
    {{ Html::method()->value("PUT")->when($action=='edit') }}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{
                    Html::text("first_name")
                    ->value(old("first_name",$child->first_name))
                    ->label("نام فرزند")
                    }}
                    {{
                    Html::text("last_name")
                    ->value(old("last_name",$child->last_name))
                    ->label("نام خانوادگی")
                     }}
                    {{
                    Html::text("birth_date")
                    ->value(old("birth_date",$child->birth_date_fa_f))
                    ->label("تاریخ تولد")
                     }}
                    {{
                    Html::textarea("emotional_text")
                    ->value(old("emotional_text",$child->emotional_text))
                    ->label("متن احساسی")
                    ->description("")
                     }}
                    {{
                    Html::textarea("about")
                    ->value(old("about",$child->about))
                    ->label("درباره")
                    ->description("")
                     }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">{{ Html::submit()->label('ذخیره') }}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
