<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ar_name');
            $table->text('ar_specialization');
            $table->string('en_name');
            $table->text('en_specialization');
            $table->string('photo')->nullable();
            $table->string('face')->nullable();
            $table->string('insta')->nullable();
            $table->string('google')->nullable();
            $table->string('twit')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
