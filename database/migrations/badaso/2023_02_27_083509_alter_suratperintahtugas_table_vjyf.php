<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSuratperintahtugasTableVjyf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->string('jaksa_bertugas', 255)->charset('')->collation('')->change();
			$table->string('jaksa_bertugas', 255)->nullable(true)->charset('')->collation('')->change();
			$table->dropIndex('surat_perintah_tugas_jaksa_bertugas_foreign');
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


        Schema::table('surat_perintah_tugas', function (Blueprint $table) {
            $table->bigInteger('jaksa_bertugas')->charset('')->collation('')->change();
			$table->bigInteger('jaksa_bertugas')->nullable(false)->charset('')->collation('')->change();
			$table->bigInteger('jaksa_bertugas')->unsigned()->charset('')->collation('')->change();
        });
    }
}
