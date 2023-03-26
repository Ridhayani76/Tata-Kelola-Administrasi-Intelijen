<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAnalisasasaranTableTyef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('analisa_sasaran', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
        });

        Schema::table('analisa_sasaran', function (Blueprint $table) {
            $table->dropColumn('kategori_id');
			$table->string('tertanda', 255);
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


        Schema::table('analisa_sasaran', function (Blueprint $table) {
            $table->bigInteger('kategori_id')->unsigned();
			$table->dropColumn('tertanda');
        });

        Schema::table('analisa_sasaran', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('no action');
        });


    }
}
