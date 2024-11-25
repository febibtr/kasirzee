<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoTable extends Migration
{
    public function up()
    {
        Schema::create('toko', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id')->nullable();
            $table->string('nama_toko', 100);
            $table->string('jenis_usaha', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kota_kabupaten', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->integer('usia_bisnis')->nullable();
            $table->timestamps();

            
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('toko');
    }
}
