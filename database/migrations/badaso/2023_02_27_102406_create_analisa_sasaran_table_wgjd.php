<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisasasaranTableWgjd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('analisa_sasaran', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('kategori_id')->unsigned();
			$table->text('sasaran');
			$table->text('kondisi_situasi');
			$table->timestamp('tgl_surat')->nullable(true);
			$table->string('berkas', 255);
			$table->timestamps();
			$table->softDeletes();
        });

        Schema::table('analisa_sasaran', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('no action');
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
        Schema::dropIfExists('analisa_sasaran');
    }
}
