<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratperintahTablePofm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('surat_perintah', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->enum('kategori', ['"IN.1"','"IN.2"','"IN.3"','"IN.6"','"IN.7"','"IN.8"']);
			$table->string('nomor', 255);
			$table->string('kepada', 255)->index('kepada');
			$table->timestamp('tanggal');
			$table->string('tentang', 255);
			$table->enum('sifat', ['"biasa"','"rahasia"']);
			$table->string('ttd', 255)->index('ttd');
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
        Schema::dropIfExists('surat_perintah');
    }
}
