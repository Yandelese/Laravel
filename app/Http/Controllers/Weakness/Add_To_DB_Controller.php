<?php

namespace App\Http\Controllers\Weakness;

use App\Http\Controllers\Controller;
use App\Http\Requests\Weakness\Add_To_DB_Request;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Manufacturers_Weaknesses;
use App\Models\Weaknesses;
use App\Services\Distributor_Service;
use App\Services\Weakness_Service;


class Add_To_DB_Controller extends Controller
{
    public function __invoke(Add_To_DB_Request $request, Weakness_Service $weakness_service)
    {
        $new_weakness= $request->validated();
        $allweaknesses=$weakness_service->add_to_DB($new_weakness);
        return view('Weakness_List',compact('allweaknesses'));
    }

}


