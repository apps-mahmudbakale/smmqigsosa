<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('gender');
            $table->string('marital_status');
            $table->integer('chapter');
            $table->string('hostel');
            $table->string('state');
            $table->string('lga');
            $table->string('occupation');
            // $table->string('place_of_work');
            $table->string('photo');
            $table->string('signature');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
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
        Schema::dropIfExists('members');
    }
};
