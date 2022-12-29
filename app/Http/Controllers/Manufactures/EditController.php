<?php

namespace App\Http\Controllers\Manufactures;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Manufacture_Service;


class EditController extends Controller
{
    public function __invoke(Manufacture_Service $manufacture_service,$manufactures_id)
    {
        $certain_manufacturer=$manufacture_service->edit_manufactures($manufactures_id);
        return view('Edit_Manufactures',compact('certain_manufacturer'));
    }

}


