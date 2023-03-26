<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSuratperintahTableOwus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('surat_perintah');

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
        Schema::create('surat_perintah', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->enum('kategori', ['']);
			$table->string('nomor', 255);
			$table->string('kepada', 255)->index('kepada');
			$table->timestamp('tanggal')->default('as_defined');
			$table->string('tentang', 255);
			$table->enum('sifat', ['']);
			$table->string('ttd', 255)->index('ttd');
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
