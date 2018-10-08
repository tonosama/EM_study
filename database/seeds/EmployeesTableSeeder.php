<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 1レコード

        Employee::create([
            'emp_sid'=> '10000003',
            'given_name'=> '寺本1',
            'family_name'=>'生',
            'furi_given_name'=>'テラモト',
            'furi_family_name'=>'ショウ',
            'department'=>'GB部',
            'birthday'=>'1988-06-23',
            'address'=>'神奈川県横浜市戸塚区戸塚町',
            'created_at'=>new DateTime(),
            'enable'=>'1'
        ]);

        Employee::create([
            'emp_sid'=> '10000004',
            'given_name'=> '寺本2',
            'family_name'=>'生',
            'furi_given_name'=>'テラモト',
            'furi_family_name'=>'ショウ',
            'department'=>'GB部',
            'birthday'=>'1988-06-23',
            'address'=>'神奈川県横浜市戸塚区戸塚町',
            'created_at'=>new DateTime(),
            'enable'=>'1'
        ]);

        Employee::create([
            'emp_sid'=> '10000005',
            'given_name'=> '寺本3',
            'family_name'=>'生',
            'furi_given_name'=>'テラモト',
            'furi_family_name'=>'ショウ',
            'department'=>'GB部',
            'birthday'=>'1988-06-23',
            'address'=>'神奈川県横浜市戸塚区戸塚町',
            'created_at'=>new DateTime(),
            'enable'=>'1'
        ]);

        Employee::create([
            'emp_sid'=> '10000006',
            'given_name'=> '寺本4',
            'family_name'=>'生',
            'furi_given_name'=>'テラモト',
            'furi_family_name'=>'ショウ',
            'department'=>'GB部',
            'birthday'=>'1988-06-23',
            'address'=>'神奈川県横浜市戸塚区戸塚町',
            'created_at'=>new DateTime(),
            'enable'=>'1'
        ]);
    }
}
