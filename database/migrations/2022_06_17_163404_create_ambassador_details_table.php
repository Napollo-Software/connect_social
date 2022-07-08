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
            $table->string('country')->default('YC');
            $table->string('relationship')->default('single');
            $table->date('joining')->default('2020-01-28');
            $table->string('high_school')->default('Lorem Ipsum');
            $table->string('workplace')->default('Lorem Ipsum');
            $table->string('hobbies')->default('Lorem Ipsum');
            $table->string('cover_photo')->nullable();
            $table->string('privacy',2000)->nullable()->default('a:9:{s:5:"about";s:7:"friends";s:4:"city";s:7:"friends";s:5:"state";s:7:"friends";s:12:"relationship";s:7:"friends";s:7:"joining";s:7:"friends";s:11:"high_school";s:7:"friends";s:9:"workplace";s:7:"friends";s:7:"hobbies";s:7:"friends";s:5:"phone";s:7:"friends";}');
            $table->string('network_privacy')->default('a:2:{s:7:"friends";s:7:"friends";s:11:"connections";s:7:"friends";}');
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('passport_1')->nullable();
            $table->string('passport_2')->nullable();
            $table->string('id_card_1')->nullable();
            $table->string('id_card_2')->nullable();
            $table->string('kyc_status')->nullable();
            $table->string('kyc_reject_reason')->nullable();
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
