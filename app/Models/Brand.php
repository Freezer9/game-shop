<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['publisher', 'developer'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
