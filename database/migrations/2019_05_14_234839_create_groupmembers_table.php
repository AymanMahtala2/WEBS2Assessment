<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //koppeltabel users en group
    {
        Schema::create('groupmembers', function (Blueprint $table) {
            $table->BigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->BigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupmembers');
    }
}
