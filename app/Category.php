<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, 'category');
    }

    public function artists()
    {
        return $this->hasMany(Artist::class, 'category');
    }

    public function contents()
    {
        return $this->hasMany(Content::class, 'category');
    }
}
