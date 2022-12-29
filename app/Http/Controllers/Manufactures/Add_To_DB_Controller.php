<?php

namespace App\Http\Controllers\Manufactures;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manufactures\Add_To_DB_Request;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Manufacturers_Weaknesses;
use App\Models\Weaknesses;
use App\Services\Manufacture_Service;


class Add_To_DB_Controller extends Controller

{

    public function __invoke(Add_To_DB_Request $request,Manufacture_Service $manufacture_service)
    {
        $newbrand = $request->validated();
        $manufacturers=$manufacture_service->add_to_DB($newbrand);
       return view('Manufacturer_list',compact('manufacturers'));
    }

}


