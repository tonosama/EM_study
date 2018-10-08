<?php

namespace App\Http\Controllers;

use Request;
use Excel;
use Redirect;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use App\MyDomainName;

class CsvUploadController extends Controller
{
    //
    public function index(){

      return view('csv_upload');

    }

    public function import(){
      setlocale(LC_ALL, 'ja_JP.UTF-8');

      // アップロードしたファイルを取得
      // 'csv_file' はCSVファイルインポート画面の inputタグのname属性
      $uploaded_file = Request::file('file');

      // アップロードしたファイルの絶対パスを取得
      $file_path = Request::file('file')->path($uploaded_file);

      $file = new \SplFileObject($file_path);
      $file->setFlags(\SplFileObject::READ_CSV);

      $row_count = 1;
      foreach ($file as $row)
      {
          // 1行目のヘッダーは取り込まない
          var_dump($row);

          if ($row_count > 1 && !empty($row[0]))
          {
              $emp_sid = mb_convert_encoding($row[0], 'UTF-8', 'UTF-8');
              $given_name = mb_convert_encoding($row[1], 'UTF-8', 'UTF-8');
              $family_name = mb_convert_encoding($row[2], 'UTF-8', 'UTF-8');
              $furi_given_name = mb_convert_encoding($row[3], 'UTF-8', 'UTF-8');
              $furi_family_name = mb_convert_encoding($row[4], 'UTF-8', 'UTF-8');
              $department = mb_convert_encoding($row[5], 'UTF-8', 'UTF-8');
              $birthday = mb_convert_encoding($row[6], 'UTF-8', 'UTF-8');
              $email = mb_convert_encoding($row[7], 'UTF-8', 'UTF-8');
              $address = mb_convert_encoding($row[8], 'UTF-8', 'UTF-8');
              $enable = mb_convert_encoding($row[9], 'UTF-8', 'UTF-8');

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
                // 'image_data' => $image_data,
                'enable' => $enable]
               );
          }
          $row_count++;
      }
      return view('finish');

    }
}
