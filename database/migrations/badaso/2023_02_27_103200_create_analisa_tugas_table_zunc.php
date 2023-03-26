<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisatugasTableZunc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('analisa_tugas', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('kategori_id')->unsigned();
			$table->text('identifikasi');
			$table->text('uraian');
			$table->text('pelaksana');
			$table->text('sarana');
			$table->text('komkor');
			$table->text('evaluasi');
			$table->timestamp('tgl_surat');
			$table->string('berkas', 255);
			$table->timestamps();
			$table->softDeletes();
        });

        Schema::table('analisa_tugas', function (Blueprint $table) {
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
        Schema::dropIfExists('analisa_tugas');
    }
}
