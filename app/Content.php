<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Content extends Model
{
    public function cat()
    {
        return $this->belongsTo(Category::class, 'category', '_id');
    }

    public function subcat()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory', '_id');
    }

    // public function art()
    // {
    //     return $this->belongsTo(Artist::class, 'artist', '_id');
    // }
}
