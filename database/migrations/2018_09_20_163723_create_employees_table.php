<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
          $table->integer('emp_sid');
          $table->string('given_name',255)->nullable();
          $table->string('family_name',255)->nullable();
          $table->string('furi_given_name',255)->nullable();
          $table->string('furi_family_name',255)->nullable();
          $table->string('department',255)->nullable();
          $table->date('birthday')->nullable();
          $table->string('gender',2)->nullable();
          $table->string('email',255)->nullable();
          $table->string('address',255)->nullable();
          // $table->integer('postal_code',255);
          $table->string('image_data',255)->nullable();
          $table->timestamp('created_by')->nullable();
          $table->string('enable',1);
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
          $table->primary('emp_sid')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
