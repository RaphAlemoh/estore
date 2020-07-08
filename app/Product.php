<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price', 'product_url', 'category_id', 'discount', 'featured'];

    public function getPrice(){
        // return number_format('$%i', $this->price/100);
        // return '$'.number_format($this->price / 100, 2);
        return $this->price;
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
