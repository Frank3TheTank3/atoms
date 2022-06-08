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
        Schema::create('atoms', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->float('mass');
            $table->float('boiling_point');
            $table->float('melting_point');
            $table->integer('order');
            $table->integer('electrons');
            $table->integer('protons');
            $table->float('electronegativity');
            $table->date('discovery_date');
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
        Schema::dropIfExists('atoms');
    }
};
