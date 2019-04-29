<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('familyname');
            $table->string('passport',150);
            $table->unsignedBigInteger('user_id');
            $table->string('code',50);
            $table->unsignedBigInteger('car_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropForeign('forms_user_id_foreign');
            $table->dropForeign('forms_car_id_foreign');
        });
        Schema::dropIfExists('forms');
    }
}
