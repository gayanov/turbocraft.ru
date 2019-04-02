<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'server_id' => $this->server_id,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'original_price' => $this->original_price,
            'discount_price' => $this->discount_price,
            'first' => $this->first,
            'highlight' => $this->highlight,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
