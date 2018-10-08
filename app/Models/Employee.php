<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    /**
     * create()やupdate()で入力を受け付ける ホワイトリスト
     */
    // protected $fillable = ['emp_sid', 'given_name','family_name','furi_given_name','furi_family_name','department','birthday',' email','address','image_data','enable','created_at','updated_at'];

    // or

    /**
     * create()やupdate()で入力させない ブラックリスト
     */
     protected $guarded = [];
     protected $table = 'employees';
     protected $primaryKey = 'emp_sid';


}
