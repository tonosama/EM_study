<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class EmpDeleteController extends Controller
{
    //

    public function deleteFromId($id){

      $User = Employee::query()->where('emp_sid',$id)->delete();

      return view('delete');
    }
}
