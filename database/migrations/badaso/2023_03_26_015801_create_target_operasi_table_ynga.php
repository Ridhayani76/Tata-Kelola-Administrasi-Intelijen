<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetoperasiTableYnga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('target_operasi', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('nomor', 255);
			$table->timestamp('tgl_operasi')->nullable(true);
			$table->text('masalah_pokok');
			$table->string('pelaksana', 255);
			$table->timestamp('tgl_surat')->nullable(true);
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
        Schema::dropIfExists('target_operasi');
    }
}
