<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn',10)->unique();
            $table->string('nis',4)->unique();
            $table->string('nama',30);
            $table->integer('kelas_id')->unsigned()->constraint()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('telp',13)->nullable();
            $table->string('password');
            $table->integer('spp_id')->unsigned()->constraint()->onDelete('cascade')->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
