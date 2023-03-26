<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersuratmasukTableTyqd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('register_surat_masuk', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->timestamp('tanggal_terima');
			$table->string('nomor_surat', 255);
			$table->string('perihal', 255)->nullable(true);
			$table->string('disposisi', 255)->nullable(true);
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
        Schema::dropIfExists('register_surat_masuk');
    }
}
