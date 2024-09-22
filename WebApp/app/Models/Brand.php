<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'brand';
    protected $fillable = ['id', 'name'];

    static function remove(int $id){
        return self::where('id', $id)->delete($id);
    }
}

/** Note
 * Kieu static khong can tao doi tuong
 */