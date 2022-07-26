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
        Schema::create('clasificacion_senalamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('img_id')
                ->constrained('senalamientos_imagenes')
                ->onUpdate('cascade');
            $table->foreignId('simbologia_id')
                ->constrained('simbologia_senalamiento')
                ->onUpdate('cascade');
            $table->integer('mantenimiento_senal');
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
        Schema::dropIfExists('clasificacion_senalamientos');
    }
};
