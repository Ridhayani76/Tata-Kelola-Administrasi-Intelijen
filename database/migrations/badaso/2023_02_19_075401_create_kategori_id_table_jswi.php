<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriidTableJswi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('kategori_id', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('surat_perintah_tugas_id')->unsigned();
			$table->bigInteger('kategori_surat_id')->unsigned();
			$table->timestamps();
        });

        Schema::table('kategori_id', function (Blueprint $table) {
            $table->foreign('surat_perintah_tugas_id')->references('id')->on('surat_perintah_tugas')->onDelete('cascade')->onUpdate('restrict');
			$table->foreign('kategori_surat_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('restrict');
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
        Schema::dropIfExists('kategori_id');
    }
}
