<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class TargetOperasiCRUDDataRowAdded extends Seeder
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

            $data_type = Badaso::model('DataType')::where('name', 'target_operasi')->first();

            \DB::table('badaso_data_rows')->insert(array (
                0 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 1,
                ),
                1 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'nomor',
                    'type' => 'text',
                    'display_name' => 'Nomor',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 2,
                ),
                2 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'tgl_operasi',
                    'type' => 'date',
                    'display_name' => 'Tanggal Operasi',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 3,
                ),
                3 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'masalah_pokok',
                    'type' => 'textarea',
                    'display_name' => 'Masalah Pokok',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 4,
                ),
                4 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'pelaksana',
                    'type' => 'select_multiple',
                    'display_name' => 'Pelaksana',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{
"items": [
{
"label": "Agustiawan Umar, SH., MH",
"value": "Agustiawan Umar, SH., MH"
},
{
"label": "Hamri Riza., SH",
"value": "Hamri Riza., SH"
},
{
"label": "Rudi Firmansyah., SH., MH",
"value": "Rudi Firmansyah., SH., MH"
},
{
"label": "M. Rachmadhani., SH",
"value": "M. Rachmadhani., SH"
},
{
"label": "Mhd. Fadly Arby., SH., M.Kn",
"value": "Mhd. Fadly Arby., SH., M.Kn"
},
{
"label": "Tri Taruna Fariadi., SH",
"value": "Tri Taruna Fariadi., SH"
},
{
"label": "Narendra Putra Swardhana, SH., MH",
"value": "Narendra Putra Swardhana, SH., MH"
},
{
"label": "Mustika Arin R, SH",
"value": "Mustika Arin R, SH"
},
{
"label": "M. Anhar Lingga Bharadaksa, SH",
"value": "M. Anhar Lingga Bharadaksa, SH"
},
{
"label": "Noorliza Maulidya, SH",
"value": "Noorliza Maulidya, SH"
},
{
"label": "Renny Gladis Karina, SH",
"value": "Renny Gladis Karina, SH"
},
{
"label": "Tri Ayu Damai Yanti., S.H",
"value": "Tri Ayu Damai Yanti., S.H"
},
{
"label": "Mochammad Luthfi Septiadi, A.Md",
"value": "Mochammad Luthfi Septiadi, A.Md"
}
]
}',
                    'relation' => NULL,
                    'order' => 5,
                ),
                5 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'tgl_surat',
                    'type' => 'date',
                    'display_name' => 'Tanggal Surat',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 6,
                ),
                6 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'berkas',
                    'type' => 'upload_file',
                    'display_name' => 'Berkas',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 7,
                ),
                7 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'created_at',
                    'type' => 'datetime',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 8,
                ),
                8 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'updated_at',
                    'type' => 'datetime',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 9,
                ),
                9 => 
                array (
                    'data_type_id' => $data_type->id,
                    'field' => 'deleted_at',
                    'type' => 'datetime',
                    'display_name' => 'Deleted At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'relation' => NULL,
                    'order' => 10,
                ),
            ));

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

            throw new Exception('exception occur ' . $e);
        }
    }
}

