<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSuratperintahtugasTableDnca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->dropForeign(['jaksa_bertugas']);
			$table->foreign('jaksa_bertugas')->references('id')->on('badaso_users')->onDelete('cascade')->onUpdate('cascade');
        });        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->dropForeign(['jaksa_bertugas']);
			$table->foreign('jaksa_bertugas')->references('id')->on('badaso_users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->dropForeign(['jaksa_bertugas']);
			$table->foreign('jaksa_bertugas')->references('id')->on('jaksa')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->dropForeign(['jaksa_bertugas']);
			$table->foreign('jaksa_bertugas')->references('id')->on('jaksa')->onDelete('cascade')->onUpdate('cascade');
        });

    }
}
