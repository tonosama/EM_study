<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Http\Requests\StoreEmpPost;
// use Validator;
// use Illuminate\Validation\Rule;

class EmpDetailAddController extends Controller
{
    //

    public function index(){

      return view('emp_add');
    }

    public function selectFromId($id){

      $User = Employee::query()->where('emp_sid',$id)->first();

      return view('emp_add',compact('User'));
    }

    // 社員マスタ更新
    public function uplode(StoreEmpPost $request){


      $emp_sid = $request->input('emp_sid');
      $given_name = $request->input('given_name');
      $family_name = $request->input('family_name');
      $furi_given_name = $request->input('furi_given_name');
      $furi_family_name = $request->input('furi_family_name');
      $department = $request->input('department');
      $birthday = $request->input('birthday');
      $email = $request->input('email');
      $address = $request->input('address');

      // 画像保存
      $image_data = NULL;
      $originalImg = $request->file('upfile');
      if(!empty($originalImg)){
        $filePass = $originalImg->store('public');
        $image_data = str_replace('public/', '', $filePass);
      }

      Employee::updateOrCreate(
        ['emp_sid' => $emp_sid],
        ['emp_sid' => $emp_sid,
        'given_name' => $given_name,
        'family_name' => $family_name,
        'furi_given_name' => $furi_given_name,
        'furi_family_name' => $furi_family_name,
        'department' => $department,
        'birthday' => $birthday,
        'email' => $email,
        'address' => $address,
        'image_data' => $image_data,
        'enable' => 1
      ]);

      return view('finish');

      // return view('emp_add',);
    }







}
