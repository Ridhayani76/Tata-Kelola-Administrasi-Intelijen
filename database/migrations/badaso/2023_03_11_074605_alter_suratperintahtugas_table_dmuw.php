<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSuratperintahtugasTableDmuw extends Migration
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
            $table->dropForeign(['kategori_id']);
        });

        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->dropColumn('kategori_id');
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
            $table->bigInteger('kategori_id')->unsigned();
        });

        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('cascade');
        });


    }
}
