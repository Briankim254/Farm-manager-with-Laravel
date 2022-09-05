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
        Schema::create('farm_registers', function (Blueprint $table) {
            $table->string('farm_crop_id');
            $table->id();
            $table->string('category_id');
            $table->string('total_cost');
            $table->string('quantity');
            $table->text('description');
            $table->date('date_created');
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
       // Schema::dropIfExists('farm_registers');
    }
};
