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
        Schema::create('senalamientos_imagenes', function (Blueprint $table) {
            $table->id();
            $table->string('img_name');
            $table->string('img_url');
            $table->string('img_id_gdrive');
            $table->string('img_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senalamientos_imagenes');
    }
};
