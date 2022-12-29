<?php

namespace App\Http\Controllers\Manufactures;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manufactures\Update_Request;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;


class UpdateController extends Controller
{
    public function __invoke(Update_Request $request,$certain_manufacturer_id)
    {
        $updated_manufactures=$request->validated();
        $certain_manufacturer=Manufacturer::find($certain_manufacturer_id);
        $certain_manufacturer->update($updated_manufactures);
        $manufacturers=Manufacturer::all();
        $weakness_certain_manufactures=Weaknesses::all();
        return view('Manufacturer_list',compact('manufacturers','weakness_certain_manufactures'));
    }

}


