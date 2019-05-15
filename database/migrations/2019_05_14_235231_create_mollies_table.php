<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMolliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mollies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('mollie_title');
            $table->text('optional_description')->nullable();;
            $table->decimal('amount', 5,2);
            $table->string('currency');
            $table->date('date_sent');
            $table->boolean('active');
            $table->BigInteger('accountnumber')->unsigned();
            $table->foreign('accountnumber')->references('id')->on('bankaccount');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mollies');
    }
}
