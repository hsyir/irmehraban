<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $casts = [
        "selected_children" => "array"
    ];

    public function getUrlAttribute()
    {
        return route("supports.show",$this->uuid);
    }

    public function children(){
        return $this->belongsToMany(Child::class);
    }
}
