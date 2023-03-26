<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropAnalisasasaranTableUdik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('analisa_sasaran');

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
        Schema::create('analisa_sasaran', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->text('sasaran');
			$table->text('kondisi');
			$table->string('ttd', 255)->index('ttd');
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
