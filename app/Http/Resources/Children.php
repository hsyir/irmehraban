<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Children extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name"=>$this->name,
            "image"=>$this->image_url,
            "emotional_text"=>$this->emotional_text,
            "about"=>$this->about,
            "age"=>$this->age,
            "birth_date"=>$this->birth_date,
        ];
    }
}
