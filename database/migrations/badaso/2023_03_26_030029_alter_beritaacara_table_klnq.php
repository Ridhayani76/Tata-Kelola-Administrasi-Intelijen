<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBeritaacaraTableKlnq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('berita_acara', function (Blueprint $table) {
            $table->string('surat_perintah', 255)->nullable(true)->charset('')->collation('')->change();
        });        Schema::table('berita_acara', function (Blueprint $table) {
            $table->dropForeign(['surat_perintah']);
			$table->foreign('surat_perintah')->references('nomor')->on('surat_perintah_operasi')->onDelete('cascade')->onUpdate('no action');
        });        Schema::table('berita_acara', function (Blueprint $table) {
            $table->dropForeign(['surat_perintah']);
			$table->foreign('surat_perintah')->references('nomor')->on('surat_perintah_operasi')->onDelete('cascade')->onUpdate('no action');
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
        Schema::table('berita_acara', function (Blueprint $table) {
            $table->dropForeign(['surat_perintah']);
			$table->foreign('surat_perintah')->references('nomor')->on('surat_permintaan_keterangan')->onDelete('cascade')->onUpdate('no action');
        });
        Schema::table('berita_acara', function (Blueprint $table) {
            $table->dropForeign(['surat_perintah']);
			$table->foreign('surat_perintah')->references('nomor')->on('surat_permintaan_keterangan')->onDelete('cascade')->onUpdate('no action');
        });
        Schema::table('berita_acara', function (Blueprint $table) {
            $table->string('surat_perintah', 255)->nullable(false)->charset('')->collation('')->change();
        });
    }
}
