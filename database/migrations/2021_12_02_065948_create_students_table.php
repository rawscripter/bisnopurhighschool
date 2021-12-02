<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uuid');
            $table->string('transaction_id');
            $table->string('image');
            $table->string('birth_certificate_no')->unique();
            $table->date('birth_date');
            $table->string('gender');
            $table->string('phone');
            $table->string('father_name');
            $table->string('father_nid_no');
            $table->string('mother_name');
            $table->string('mother_nid_no');
            $table->string('guardian_name')->nullable();
            $table->string('guardian_nid_no')->nullable();
            $table->string('desire_class');
            $table->string('present_address');
            $table->string('present_devision');
            $table->string('present_district');
            $table->string('present_thana');
            $table->string('present_post_code');
            $table->string('permanent_address');
            $table->string('permanent_devision');
            $table->string('permanent_district');
            $table->string('permanent_thana');
            $table->string('permanent_post_code');
            $table->string('prev_class')->nullable();
            $table->string('prev_school')->nullable();
            $table->string('version')->default('bangla');
            $table->integer('status')->default(0); // 0 = inactive, 1 = active
            $table->integer('is_rejected')->default(0); // 0 = not rejected, 1 = rejected
            $table->bigInteger('rejected_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
