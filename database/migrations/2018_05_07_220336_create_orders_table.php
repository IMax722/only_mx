<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('sender');           
            $table->string('taker');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('lol1');
            $table->string('lol2');
            $table->string('type');        
            $table->string('am');
            $table->string('status')->default('В обработке');            
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
        Schema::dropIfExists('orders');
    }
}
