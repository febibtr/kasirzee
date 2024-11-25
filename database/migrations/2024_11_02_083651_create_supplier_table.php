<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama', 100);
            $table->text('alamat')->nullable();
            $table->string('nomor_hp', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}
