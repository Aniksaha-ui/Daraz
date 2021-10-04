<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
        protected $fillable = [
        'category_id', 'subcategory_name',
    ];

}
