<?php

namespace App\Http\Controllers\Manufactures;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Manufacturer;


class ShowController extends Controller
{
    public function __invoke($manufacturer_id)
    {
        $certain_manufacturer = Manufacturer::findOrFail($manufacturer_id);
        $certain_manufacturers_distributors=$certain_manufacturer->get_distributors;
        $certain_manufacturer_weaknesses=$certain_manufacturer->get_weaknesses;
        return view('Manufactures_Details', compact('certain_manufacturer','certain_manufacturers_distributors','certain_manufacturer_weaknesses'));

    }

}


