<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('payments', function (Blueprint $table) {
            $table->bigInteger('mollie_id')->unsigned();
            $table->foreign('mollie_id')->references('id')->on('mollies');
            $table->bigInteger('payer_id')->unsigned();
            $table->foreign('payer_id')->references('id')->on('users');
            $table->string('payment_id');
            $table->boolean('paid');
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
        Schema::dropIfExists('payments');
    }
}
