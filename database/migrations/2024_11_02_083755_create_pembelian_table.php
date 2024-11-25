<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->timestamp('tanggal_pembelian')->default(now());
            $table->decimal('total_harga', 15, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            
            $table->foreign('supplier_id')->references('id')->on('supplier')->onDelete('cascade');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
