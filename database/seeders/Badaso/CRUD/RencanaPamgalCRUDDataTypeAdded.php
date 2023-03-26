<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RencanaPamgalCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'rencana_pamgal')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'rencana_pamgal')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'rencana_pamgal',
                'slug' => 'rencana-pamgal',
                'display_name_singular' => 'IN.8 - Rencana Pengamanan/Rencana Penggalangan',
                'display_name_plural' => 'IN.8 - Rencana Pengamanan/Rencana Penggalangan',
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
                'updated_at' => '2023-03-26T02:29:07.000000Z',
                'created_at' => '2023-03-26T02:29:07.000000Z',
                'id' => 24,
            ));

            Badaso::model('Permission')->generateFor('rencana_pamgal');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/rencana-pamgal')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'IN.8 - Rencana Pengamanan/Rencana Penggalangan',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_rencana_pamgal',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/rencana-pamgal';
                $menu_item->title = 'IN.8 - Rencana Pengamanan/Rencana Penggalangan';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_rencana_pamgal';
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
