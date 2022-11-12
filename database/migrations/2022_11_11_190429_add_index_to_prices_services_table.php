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
        Schema::table('prices_services', function (Blueprint $table) {
            $table->index('price_id', 'pul_price_idx');
            $table->index('service_id', 'pul_service_idx');

            $table->foreign('price_id', 'pul_price_fk')->on('prices')->references('id');
            $table->foreign('service_id', 'pul_service_fk')->on('services')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prices_services', function (Blueprint $table) {
            //
        });
    }
};
