<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAnalisatugasTableUnxz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('analisa_tugas', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
        });

        Schema::table('analisa_tugas', function (Blueprint $table) {
            $table->dropColumn('kategori_id');
			$table->dropColumn('sarana');
			$table->dropColumn('komkor');
			$table->dropColumn('evaluasi');
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


        Schema::table('analisa_tugas', function (Blueprint $table) {
            $table->bigInteger('kategori_id')->unsigned();
			$table->text('sarana');
			$table->text('komkor');
			$table->text('evaluasi');
			$table->dropColumn('tertanda');
        });

        Schema::table('analisa_tugas', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategori_surat')->onDelete('cascade')->onUpdate('no action');
        });


    }
}
