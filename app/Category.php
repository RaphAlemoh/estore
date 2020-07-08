<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'category_name','description', 'status', 'category_url', 'parent_id'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}
}
