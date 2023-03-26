<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class RegisterSuratMasukCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'register_surat_masuk')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_surat_masuk')->delete();
            }

			Badaso::model('Permission')->removeFrom('register_surat_masuk');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/register-surat-masuk');

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
