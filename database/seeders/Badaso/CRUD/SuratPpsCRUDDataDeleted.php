<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class SuratPpsCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'surat_pps')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'surat_pps')->delete();
            }

			Badaso::model('Permission')->removeFrom('surat_pps');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/surat-pps');

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
