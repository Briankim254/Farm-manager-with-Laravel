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
        Schema::create('farm_crops', function (Blueprint $table) {
            $table->id();
            $table->string('farm_id');
            $table->string('crop_id');
            $table->date('planted_on');
            $table->string('harvest_by');
            $table->string('year_planted');
            $table->text('status');
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
      //  Schema::dropIfExists('farm_crops');
    }
};
