<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanam', function (Blueprint $table) {
            $table->integer('id_tanam');
            $table->string('penanggung');
            $table->string('jenis_tanaman');
            $table->integer('luas');
            $table->date('tanggal_perencanaan');
            $table->date('tanggal_pelaksanaan');
            $table->string('status');
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
        Schema::dropIfExists('tanam');
    }
}
