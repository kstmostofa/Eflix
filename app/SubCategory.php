<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class SubCategory extends Model
{
    public function cat()
    {
        return $this->belongsTo(Category::class, "category");
    }
}
