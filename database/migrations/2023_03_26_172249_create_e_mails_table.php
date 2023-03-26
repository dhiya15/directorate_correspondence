<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_mails', function (Blueprint $table) {
            $table->id();

            $table->string("mail_number")->nullable();
            $table->string("mail_subject")->nullable();
            $table->date("mail_date")->nullable();
            $table->string("mail_sender")->nullable();

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
        Schema::dropIfExists('e_mails');
    }
}
