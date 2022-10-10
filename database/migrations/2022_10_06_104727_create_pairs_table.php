<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pairs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("currency_id_a")->unsigned()->nullable();
            $table->bigInteger("currency_id_b")->unsigned()->nullable();
            $table->double('exchange_rate_a_to_b', 10, 2);
            $table->double('exchange_rate_b_to_a', 10, 2);
            $table->bigInteger('count')->default(0)->nullable();
            $table->timestamps();

            // foreign keys
            $table->foreign('currency_id_a')->references('id')->on('currencies');
            $table->foreign('currency_id_b')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pairs');
    }
};
