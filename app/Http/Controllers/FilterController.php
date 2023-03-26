<?php

namespace App\Http\Controllers;

use App\Models\SuratPerintahTugas;
use Exception;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Helpers\ApiResponse;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterSprintug(Request $request)
    {
        try {
            // $data = new SuratPerintahTugas;
            if ($request->has('from')) {
                $from = $request->get('from');
            }
            if ($request->has('to')) {
                $to = $request->get('to');
            }


            $data["data"] = SuratPerintahTugas::whereBetween('tgl_surat', [$from, $to])->get();
            
            return ApiResponse::onlyEntity($data);
        } catch (Exception $e) {
            DB::rollBack();
            return ApiResponse::failed($e);
        }
    }
}
