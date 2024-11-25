<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id')->nullable();
            $table->string('nama', 100);
            $table->string('nomor_hp', 15)->nullable();
            $table->string('email', 100)->unique();
            $table->text('alamat')->nullable();
            $table->enum('role', ['kasir', 'admin',]);
            $table->string('password', 255);
            $table->timestamps();

            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
