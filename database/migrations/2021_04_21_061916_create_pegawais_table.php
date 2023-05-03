<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {            
            $table->integer("nip")->length(20)->unsigned()->primary();
            $table->string("nama_lengkap", 30);
            $table->integer("nik")->length(20)->unsigned();
            $table->enum("id_dept", ["EDP","MANREP","MARK","OPS","ENG","FIN","HRD"]);
            $table->string("tmp_lahir", 30);
            $table->date("tgl_lahir");
            $table->string("alamat", 255);
            $table->enum("jenkel", ["0","1"]);
            $table->enum("goldar",["O","A","B","AB"])->nullable();
            $table->enum("agama", ["Islam","Kristen","Katholik","Hindu","Budha","Konghucu"]);
            $table->enum("jabatan", ["Dir","Wadir","Deputi","Staf"]);
            $table->enum("pernikahan", ["0","1"]);
            $table->enum("kewarganegaraan", ["WNI","WNA"]);
            $table->string("path_foto")->nullable();
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
        Schema::dropIfExists('pegawai');
    }
}
