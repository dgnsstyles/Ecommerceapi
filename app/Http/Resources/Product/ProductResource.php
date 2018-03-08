<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

/**
 * @property mixed detail
 * @property mixed name
 * @property mixed price
 * @property mixed stock
 */
class ProductResource extends Resource
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
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock,
            'discount' => $this->discount

        ];
    }
}
