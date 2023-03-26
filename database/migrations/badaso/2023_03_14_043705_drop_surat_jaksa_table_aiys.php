<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSuratjaksaTableAiys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('surat_jaksa');

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
        Schema::create('surat_jaksa', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->bigInteger('surat_id')->index('surat_id');
			$table->bigInteger('jaksa_id')->index('jaksa_id');
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
