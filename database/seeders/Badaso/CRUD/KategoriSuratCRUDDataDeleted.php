<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class KategoriSuratCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'kategori_surat')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'kategori_surat')->delete();
            }

			Badaso::model('Permission')->removeFrom('kategori_surat');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/kategori-surat');

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
