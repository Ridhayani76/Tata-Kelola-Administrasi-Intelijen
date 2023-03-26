<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropJaksaTableIzrv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('jaksa');

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
        Schema::create('jaksa', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('nama', 255);
			$table->string('pangkat', 255);
			$table->string('nip', 255);
			$table->string('jabatan', 255);
			$table->timestamps();
			$table->softDeletes();
        });
    }
}
