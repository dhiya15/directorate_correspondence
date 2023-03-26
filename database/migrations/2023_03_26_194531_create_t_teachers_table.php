<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_teachers', function (Blueprint $table) {
            $table->id();

            $table->string("number")->nullable();
            $table->string("full_name")->nullable();
            $table->string("certificate")->nullable();
            $table->string("grade")->nullable();
            $table->date("hiring_date")->nullable();
            $table->string("duration")->nullable();
            $table->text("remarque")->nullable();

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
        Schema::dropIfExists('t_teachers');
    }
}
