<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintingShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('painting_shop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shops_id')->nullable();
            $table->foreign('shops_id')
                    ->references('id')
                    ->on('shops')
                    ->onDelete('set null');
            
            $table->unsignedBigInteger('paintings_id')->nullable();
            $table->foreign('paintings_id')
                    ->references('id')
                    ->on('paintings')
                    ->onDelete('set null');
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
        Schema::dropIfExists('painting_shop');
    }
}
