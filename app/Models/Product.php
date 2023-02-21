<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function imageproduct()
    {
        return $this->belongsTo(ImageProduct::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
