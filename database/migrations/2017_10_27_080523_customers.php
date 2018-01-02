<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('customers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('email')->unique();
            $table->Integer('balance');
            $table->string('currency');
            $table->string('token');
            $table->string('description');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::drop('customers');
    }
    
}
