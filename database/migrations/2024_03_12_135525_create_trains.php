<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 20);
            $table->string('depature_station', 40);
            $table->string('arrive_station', 40);
            $table->timestamp('departure_time', 0)->nullable();
            $table->timestamp('arrive_time', 0)->nullable();
            $table->string('train_code', 10);
            $table->tinyInteger('carriage_code');
            $table->boolean('in_time');
            $table->boolean('deleted');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
