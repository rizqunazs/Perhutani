<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerja_proyek', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->string("id_proyek")->length(10);
            $table->string("nip")->length(20);
            $table->double("waktu", 4, 2);
            $table->string("ket", 255);
            $table->timestamps();

            $table->foreign("id_proyek")->references("id")->on("proyek")->onDelete("cascade");            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekerja_proyek');
    }
}
