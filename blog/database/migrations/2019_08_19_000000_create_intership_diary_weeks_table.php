<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntershipDiaryWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intership_diary_weeks', function (Blueprint $table) {
            $table->id('intership_diary_week_id');
            $table->integer('intership_diary_week',false); 
            $table->integer('student_id',false); 
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('delete_at')->nullable();
            $table->integer('status',false); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intership_diary_weeks');
    }
}
