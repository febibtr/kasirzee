<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftTable extends Migration
{
    public function up()
    {
        Schema::create('shift', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->decimal('cash_drawer', 15, 2)->nullable();
            $table->decimal('saldo_awal', 15, 2)->nullable();
            $table->decimal('saldo_akhir', 15, 2)->nullable();
            $table->text('catatan')->nullable();
            $table->timestamp('waktu_mulai');
            $table->timestamp('waktu_akhir')->nullable();
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shift');
    }
}
