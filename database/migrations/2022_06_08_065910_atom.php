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
            $table->integer('order');
            $table->string('name');
            $table->string('symbol');
            $table->float('mass');
            $table->string('energy_levels');
            $table->float('electronegativity')->nullable();
            $table->float('boiling_point')->nullable();
            $table->float('melting_point')->nullable();
            $table->integer('electrons');
            $table->integer('neutrons');
            $table->float('abundance');
            $table->integer('discovered');
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
