<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSuratoperasiintelTableNvjg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('surat_operasi_intel');

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
        Schema::create('surat_operasi_intel', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('nomor', 255);
			$table->text('menimbang');
			$table->string('jaksa_bertugas', 255)->index('jaksa_bertugas');
			$table->timestamp('tanggal_surat')->default('as_defined');
			$table->string('ttd', 255)->index('ttd');
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
