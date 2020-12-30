<form action="{{ route('admin.children.store')  }}"
      method="post" enctype="multipart/form-data">
    @csrf
    {{ Html::hidden()->name('child_id')->value($child->id)->when( $action=='edit') }}
    {{ Html::method()->value("PUT")->when($action=='edit') }}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{
                    Html::text("national_code")
                    ->value(old("national_code",$child->national_code))
                    ->label("کد ملی")
                    }}
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
                    Html::text("birth_date_fa_f")
                    ->value(old("birth_date_fa_f",$child->birth_date_fa_f))
                    ->label("تاریخ تولد")
                     }}
                    {{
                    Html::textarea("emotional_text")
                    ->value(old("emotional_text",$child->emotional_text))
                    ->label("متن احساسی")
                    ->description("")
                     }}{{
                    Html::textarea("priority")
                    ->value(old("priority",$child->priority))
                    ->label("اولولیت")
                    ->description("")
                     }}
                    {{
                    Html::textarea("about")
                    ->value(old("about",$child->about))
                    ->label("درباره")
                    ->description("")
                     }}

                    <label for="tags">برچسب ها</label>
                    <select name="tags[]" class="form-control taggable" id="tags" multiple>
                        @foreach(old('tags',$child->tags) as $tag)
                            <option selected>{{ $tag->name }}</option>
                        @endforeach
                    </select>

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
