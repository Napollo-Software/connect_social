<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbassadorReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambassador_receipts', function (Blueprint $table) {
            $table->id();
            $table->integer('ambassador_id');
            $table->string('merchant_name');
            $table->string('merchant_id')->nullable();
            $table->string('merchant_type');
            $table->string('receipt');
            $table->integer('status')->default(0);
            $table->float('receipt_amount');
            $table->float('reward_amount')->nullable();
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
        Schema::dropIfExists('ambassador_receipts');
    }
}
