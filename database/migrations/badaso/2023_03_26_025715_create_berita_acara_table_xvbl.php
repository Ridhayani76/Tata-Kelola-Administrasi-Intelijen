<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritaacaraTableXvbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('berita_acara', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('tgl_berita_acara');
			$table->string('jaksa_bertugas', 255);
			$table->string('surat_perintah', 255);
			$table->string('berkas', 255);
			$table->timestamps();
			$table->softDeletes();
        });

        Schema::table('berita_acara', function (Blueprint $table) {
            $table->foreign('surat_perintah')->references('nomor')->on('surat_permintaan_keterangan')->onDelete('cascade')->onUpdate('no action');
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita_acara');
    }
}
