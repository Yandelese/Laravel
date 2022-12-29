<?php

namespace App\Http\Controllers\Manufactures;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Services\Manufacture_Service;


class DeleteController extends Controller
{
    public function __invoke(Manufacture_Service $manufacture_service,$certain_manufacturer_id)
    {
        $manufacturers=$manufacture_service->delete_manufactures($certain_manufacturer_id);
        return view('Manufacturer_list',compact('manufacturers'));
    }

}


