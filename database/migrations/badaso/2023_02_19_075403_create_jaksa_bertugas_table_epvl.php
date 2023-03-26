<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaksabertugasTableEpvl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('jaksa_bertugas', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('surat_perintah_tugas_id')->unsigned();
			$table->bigInteger('badaso_users_id')->unsigned();
			$table->timestamps();
        });

        Schema::table('jaksa_bertugas', function (Blueprint $table) {
            $table->foreign('surat_perintah_tugas_id')->references('id')->on('surat_perintah_tugas')->onDelete('cascade')->onUpdate('restrict');
			$table->foreign('badaso_users_id')->references('id')->on('badaso_users')->onDelete('cascade')->onUpdate('restrict');
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
        Schema::dropIfExists('jaksa_bertugas');
    }
}
