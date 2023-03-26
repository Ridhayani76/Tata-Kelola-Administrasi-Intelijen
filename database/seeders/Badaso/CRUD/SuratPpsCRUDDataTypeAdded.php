<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class SuratPpsCRUDDataTypeAdded extends Seeder
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

            \DB::table('badaso_data_types')->insert(array (
                'id' => 17,
                'name' => 'surat_pps',
                'slug' => 'surat-pps',
                'display_name_singular' => 'IN.2 - Surat Perintah Pengamanan Pembangunan Strategis',
                'display_name_plural' => 'IN.2 - Surat Perintah Pengamanan Pembangunan Strategis',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'is_maintenance' => 0,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => 1,
                'created_at' => '2023-03-25T08:02:11.000000Z',
                'updated_at' => '2023-03-25T21:12:07.000000Z',
            ));

            Badaso::model('Permission')->generateFor('surat_pps');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/surat-pps')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'IN.2 - Surat Perintah Pengamanan Pembangunan Strategis',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_surat_pps',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/surat-pps';
                $menu_item->title = 'IN.2 - Surat Perintah Pengamanan Pembangunan Strategis';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_surat_pps';
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
