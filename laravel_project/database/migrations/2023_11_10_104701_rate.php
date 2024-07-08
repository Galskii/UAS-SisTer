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
        Schema::create('rate', function(Blueprint $table) {
            $table->id('id_rate');
            $table->integer('id_package');
            $table->string('nama_rate', 50);
            $table->date('date_from');
            $table->date('date_end', 45);
            $table->integer('jml_harian');
            $table->decimal('instant_rate', 10, 0);
            $table->decimal('foreign_instant_rate', 10, 0);
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
