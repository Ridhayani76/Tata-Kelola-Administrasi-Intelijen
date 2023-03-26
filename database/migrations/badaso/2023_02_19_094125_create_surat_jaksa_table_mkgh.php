<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratjaksaTableMkgh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('surat_jaksa', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('surat_id')->nullable(true)->unsigned();
			$table->bigInteger('jaksa_id')->nullable(true)->unsigned();
			$table->timestamps();
			$table->softDeletes();
        });

        Schema::table('surat_jaksa', function (Blueprint $table) {
            $table->foreign('surat_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('jaksa_id')->references('id')->on('badaso_users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('surat_jaksa');
    }
}
