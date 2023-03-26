<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratperintahtugasTableUqld extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('surat_perintah_tugas', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('kategori_id')->unsigned();
			$table->string('nomor', 255);
			$table->text('menimbang');
			$table->bigInteger('jaksa_bertugas')->unsigned();
			$table->timestamp('tgl_surat');
			$table->string('berkas', 255);
			$table->timestamps();
			$table->softDeletes();
        });

        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('surat_perintah_tugas');
    }
}
