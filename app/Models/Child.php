<?php

namespace App\Models;

use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Child extends Model
{
    use HasFactory;
    use EloquentHelper;
    use HasTags;

    public function getNameAttribute()
    {
        return $this["first_name"];
    }
    public function getImageUrlAttribute()
    {
        return asset("images/avatars/avatar_" . $this["id"] % 250 .".png");
    }
    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this["birth_date"])->age;
    }

    protected $casts=[
        "birth_date"=>"date"
    ];

}
