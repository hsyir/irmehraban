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


    const
        TYPE_EKRAM = 1,
        TYPE_MOHSENIN = 2;

    const
        SEX_MALE = 1,
        SEX_FEMALE = 2;

    protected $fillable = ["first_name", "last_name", "national_code", "birth_date", "about", "emotional_text", "sex", "type"];

    public function getNameAttribute()
    {
        return $this["first_name"];
    }

    public function getFullNameAttribute()
    {
        return $this["first_name"] . " " . $this["last_name"];
    }

    public function getImageUrlAttribute()
    {
        return asset("images/avatars/avatar_" . $this["id"] % 250 . ".png");
    }

    public function getTypeReadableAttribute()
    {
        return ([self::TYPE_EKRAM => "ایتام", self::TYPE_MOHSENIN => "محسنین"])[$this["type"]] ?? "";
    }
    public function getSexReadableAttribute()
    {
        return ([self::SEX_MALE => "پسر", self::SEX_FEMALE => "دختر"])[$this["sex"]] ?? "";
    }

    public function getCityAttribute()
    {
        return "کاشمر";
    }

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this["birth_date"])->age;
    }

    protected $casts = [
        "birth_date" => "date",
    ];

}
