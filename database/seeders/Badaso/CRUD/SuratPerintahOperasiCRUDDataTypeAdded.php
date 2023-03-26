<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class SuratPerintahOperasiCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'surat_perintah_operasi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'surat_perintah_operasi')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'surat_perintah_operasi',
                'slug' => 'surat-perintah-operasi',
                'display_name_singular' => 'IN.3 - Surat Perintah Operasi Intelijen',
                'display_name_plural' => 'IN.3 - Surat Perintah Operasi Intelijen',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => true,
                'updated_at' => '2023-03-25T21:30:32.000000Z',
                'created_at' => '2023-03-25T21:30:32.000000Z',
                'id' => 19,
            ));

            Badaso::model('Permission')->generateFor('surat_perintah_operasi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/surat-perintah-operasi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'IN.3 - Surat Perintah Operasi Intelijen',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_surat_perintah_operasi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/surat-perintah-operasi';
                $menu_item->title = 'IN.3 - Surat Perintah Operasi Intelijen';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_surat_perintah_operasi';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
