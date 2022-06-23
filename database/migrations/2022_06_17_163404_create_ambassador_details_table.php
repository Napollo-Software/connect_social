<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbassadorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambassador_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('about',2000)->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ');
            $table->string('city')->default('NYC');
            $table->string('state')->default('YC');
            $table->string('relationship')->default('single');
            $table->date('joining')->default('2020-01-28');
            $table->string('high_school')->default('Lorem Ipsum');
            $table->string('workplace')->default('Lorem Ipsum');
            $table->string('hobbies')->default('Lorem Ipsum');
            $table->string('cover_photo')->nullable();
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
        Schema::dropIfExists('ambassador_details');
    }
}
