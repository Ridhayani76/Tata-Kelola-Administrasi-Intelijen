<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropRegistersuratmasukTableVukw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('register_surat_masuk');

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
        Schema::create('register_surat_masuk', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->timestamp('tanggal_terima')->default('as_defined');
			$table->string('nomor_surat', 255);
			$table->string('perihal', 255);
			$table->string('disposisi', 255);
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
