<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('config', function (Blueprint $table) {

            $table->text('about');
            $table->string('phone');
            $table->string('email');
            $table->string('instgram-url');
            $table->string('twitter-url');
            $table->string('facebook-url');
            $table->timestamps();
        });
         
        Schema::create('contactus', function (Blueprint $table) {

            $table->string('name');
            $table->string('cemail');
            $table->string('cphone');
            $table->string('title');
            $table->string('content');
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
        Schema::dropIfExists('config');
    }
}
