<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use Symfony\Component\HttpFoundation\StreamedResponse;

class EmployeeController extends Controller
{

    // 検索、追加、csv出力ボタン押下時のハンドリング
    public function postCtl(){

      if (Request::input('search')){
          return $this->Select();
      }elseif (Request::input('csv_export')){
          return $this->CsvExport();
      }elseif (Request::input('user_add')){
          return $this->UserAdd();
        }
    }


    // CSV出力機能
    public function CsvExport(){
      $csvFileName = '/tmp/' . time() . rand() . '.csv';

      return  new StreamedResponse(

          function () {



            $emp_sid = Request::input('emp_sid');
            $given_name = Request::input('given_name');
            $family_name = Request::input('family_name');

            $query = Employee::query();

            if(!empty($emp_sid)) $query->where('emp_sid','like','%'.$emp_sid.'%');
            if(!empty($given_name)) $query->where('given_name','like','%'.$given_name.'%');
            if(!empty($family_name)) $query->where('family_name','like','%'.$family_name.'%');

            $query->where('enable',1);
              $csv = $query->get(['emp_sid','department','given_name','family_name',
              'furi_given_name','furi_family_name','birthday','email','address'])->toArray();
              $stream = fopen('php://output', 'w');

              foreach ($csv as $line) {
                  fputcsv($stream, $line);
              }
              fclose($stream);
          },
          200,
          [
              'Content-Type' => 'text/csv',
              'Content-Disposition' => 'attachment; filename="'.$csvFileName.'"',
          ]
      );
    }

    public function UserAdd(){
      // return view('emp_detail_add');
      // return redirect('emp_detail');
      // return view('emp_detail');
      return   View::make('emp_detail');

    }

    public function SelectAll(){
      $employees = Employee::all();
      // return view('emp_list',$employees);
      return view('emp_list',compact('employees'));
    }

    public function Select(){
      $emp_sid = Request::input('emp_sid');
      $given_name = Request::input('given_name');
      $family_name = Request::input('family_name');

      $query = Employee::query();

      if(!empty($emp_sid)) $query->where('emp_sid','like','%'.$emp_sid.'%');
      if(!empty($given_name)) $query->where('given_name','like','%'.$given_name.'%');
      if(!empty($family_name)) $query->where('family_name','like','%'.$family_name.'%');
      $query->where('enable',1);
      $employees = $query->paginate(20);

      return view('emp_list',compact('employees','emp_sid','given_name','family_name'));

    }
}
