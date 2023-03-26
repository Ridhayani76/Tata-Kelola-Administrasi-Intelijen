<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class SuratPerintahTugasCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'surat_perintah_tugas')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'surat_perintah_tugas')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 16,
                'name' => 'surat_perintah_tugas',
                'slug' => 'surat-perintah-tugas',
                'display_name_singular' => 'IN.1 - Surat Perintah Tugas',
                'display_name_plural' => 'IN.1 - Surat Perintah Tugas',
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
                'created_at' => '2023-03-11T07:50:41.000000Z',
                'updated_at' => '2023-03-15T06:19:30.000000Z',
            ));

            Badaso::model('Permission')->generateFor('surat_perintah_tugas');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/surat-perintah-tugas')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'IN.1 - Surat Perintah Tugas',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_surat_perintah_tugas',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/surat-perintah-tugas';
                $menu_item->title = 'IN.1 - Surat Perintah Tugas';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_surat_perintah_tugas';
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
