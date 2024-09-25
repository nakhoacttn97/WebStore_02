<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    // default categories
    protected $table = 'category';
    protected $fillable = ['category_id', 'category_name'];
}
