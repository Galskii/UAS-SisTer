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
        Schema::create('comunity', function(Blueprint $table) {
            $table->id('id_comunity');
            $table->string('nm_comunity', 50);
            $table->text('desk_comunity');
            $table->integer('id_village');
            $table->string('logo_comunity', 45);
            $table->string('kontak', 50);
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
