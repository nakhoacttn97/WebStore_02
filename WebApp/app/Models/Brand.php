<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'brand';
    protected $fillable = ['id', 'name'];

    static function edit(int $id, $arr){
        return self::where('id', $id)->update($arr);
    }
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    public $timestamps = FALSE;     // turn off date time on database
    protected $table = 'brand';
    protected $fillable = ['id', 'name'];
    // edit model
    static function edit(int $id, $arr){
        return self::where('id', $id)->update($arr);
    }
    // remove method
>>>>>>> ec25080 (backup for wls)
    static function remove(int $id){
        return self::where('id', $id)->delete($id);
    }
}
<<<<<<< HEAD

/** Note
 * Kieu static khong can tao doi tuong
 */
=======
>>>>>>> ec25080 (backup for wls)
