<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class IdeaResource extends JsonResource
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
            "description" => $this->description,
            "tags" => $this->tags,
            "likes" => $this->likes,
            "bk_color" => $this->bk_color,
            "txt_color" => $this->txt_color,
            "user" => $this->user,
        ];
    }
}
