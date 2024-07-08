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
        Schema::create('package', function(Blueprint $table) {
            $table->id('id_package');
            $table->integer('nama_package');
            $table->string('kode_package', 100);
            $table->text('desk_package');
            $table->string('img_package', 45);
            $table->string('nm_lokasi', 100);
            $table->integer('id_comunity');
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
        //
    }
};
