<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->timestamp('tanggal_transaksi')->default(now());
            $table->decimal('total', 15, 2)->nullable();
            $table->enum('metode_pembayaran', ['tunai','transfer']);
            $table->string('nama_pelanggan', 100)->nullable();
            $table->decimal('diskon_total', 5, 2)->nullable();
            $table->decimal('pajak_total', 5, 2)->nullable();
            $table->text('keterangan')->nullable();
           
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
