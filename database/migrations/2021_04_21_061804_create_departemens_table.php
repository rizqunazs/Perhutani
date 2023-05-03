<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartemensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departemen', function (Blueprint $table) {
            $table->enum("id", ["EDP","MANREP","MARK","OPS","ENG","FIN","HRD"])->primary();
            $table->string("nama", 30);
            $table->date("tgl_berdiri");
            $table->string("id_pemimpin", 5);
            $table->string("lokasi", 255);
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
        Schema::dropIfExists('departemen');
    }
}
