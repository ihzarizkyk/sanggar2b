<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = "gallery";

    protected $fillable = ["name","photo","category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
