<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatatanwawancaraTableFrvc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('catatan_wawancara', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('dasar_surat', 255)->nullable(true);
			$table->string('tempat', 255);
			$table->timestamp('waktu')->nullable(true);
			$table->string('narasumber', 255);
			$table->string('pelaksana', 255);
			$table->date('tgl_surat');
			$table->string('berkas', 255);
			$table->timestamps();
			$table->softDeletes();
        });

        Schema::table('catatan_wawancara', function (Blueprint $table) {
            $table->foreign('dasar_surat')->references('nomor')->on('surat_perintah_operasi')->onDelete('cascade')->onUpdate('no action');
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
        Schema::dropIfExists('catatan_wawancara');
    }
}
