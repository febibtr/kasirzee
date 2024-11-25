<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->enum('tipe', ['barang', 'jasa']);
            $table->integer('stok')->default(0);
            $table->decimal('harga_beli', 15, 2)->nullable();
            $table->decimal('harga_jual', 15, 2)->nullable();
            $table->decimal('berat', 5, 2)->nullable();
            $table->string('satuan', 50)->nullable();
            $table->decimal('diskon', 5, 2)->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
