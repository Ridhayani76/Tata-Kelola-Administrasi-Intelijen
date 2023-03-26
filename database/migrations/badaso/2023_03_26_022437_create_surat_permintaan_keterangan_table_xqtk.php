<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratpermintaanketeranganTableXqtk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('surat_permintaan_keterangan', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('nomor', 255);
			$table->date('tgl_surat');
			$table->string('kepada', 255);
			$table->date('tgl_pelaksana');
			$table->string('jaksa_ditemui', 255);
			$table->text('untuk');
			$table->string('berkas', 255);
			$table->timestamps();
			$table->softDeletes();
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
        Schema::dropIfExists('surat_permintaan_keterangan');
    }
}
