<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class AnalisaSasaranCRUDDataDeleted extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
      	\DB::beginTransaction();
       	try {
			$data_type = Badaso::model('DataType')->where('name', 'analisa_sasaran')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'analisa_sasaran')->delete();
            }

			Badaso::model('Permission')->removeFrom('analisa_sasaran');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/analisa-sasaran');

            if ($menuItem->exists()) {
                $menuItem->delete();
            }

			\DB::commit();
       	} catch(Exception $e) {
        	\DB::rollBack();

        	throw new Exception('Exception occur ' . $e);
       	}
    }
}
