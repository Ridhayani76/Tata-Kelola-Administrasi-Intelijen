<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRencanapenyelidikanTableGsjb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('rencana_penyelidikan', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('nomor', 255);
			$table->text('tentang');
			$table->date('tgl_surat');
			$table->string('mengetahui', 255);
			$table->string('pelaksana', 255);
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
        Schema::dropIfExists('rencana_penyelidikan');
    }
}
