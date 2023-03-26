<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropKategorisuratTableEbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('kategori_surat');

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
        Schema::create('kategori_surat', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('surat', 255);
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
