<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farm_leases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('farmer_name');
            $table->string('farmer_phone');
            $table->string('price');
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
       // Schema::dropIfExists('farm_leases');
    }
};
