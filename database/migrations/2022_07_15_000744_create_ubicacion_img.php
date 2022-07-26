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
        Schema::create('ubicacion_img', function (Blueprint $table) {
            $table->id();
            $table->foreignId('img_id')
                ->constrained('senalamientos_imagenes')
                ->onUpdate('cascade');
            $table->decimal('latitud', $precision = 8, $scale = 6);
            $table->decimal('longitud', $precision = 9, $scale = 6);
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
        Schema::dropIfExists('ubicacion_img');
    }
};
