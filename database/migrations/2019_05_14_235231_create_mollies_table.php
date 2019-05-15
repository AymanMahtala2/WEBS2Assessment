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
            //user_id foreign key
            $table->string('mollie_title');
            $table->text('optional_description');
            $table->decimal('amount', 5,2);
            $table->string('currency');
            $table->date('date_sent');
            $table->boolean('active');
            //accountnumber foreign key
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
        Schema::dropIfExists('mollies');
    }
}
