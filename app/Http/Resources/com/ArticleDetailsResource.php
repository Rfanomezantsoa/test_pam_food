<?php

namespace App\Http\Resources\com;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $date =strtotime($this->published_at);

        return [
            "id"=>$this->id,
            "title"=>$this->title,
            "text"=>$this->text,
            "author"=> new RestrictUserResource($this->Author),
            "image"=>$this->image,
            "categorie"=>$this->categorie,
            "published_at"=>[
                "date"=>date("F j, Y", $date ),
                "hour"=>date("h:ia",$date)
            ]
        ];
    }
}
