<?php

namespace App\Http\Controllers\Weakness;

use App\Http\Controllers\Controller;
use App\Http\Requests\Weakness\Update_Request;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Weakness_Service;


class UpdateController extends Controller
{
    public function __invoke(Update_Request $request,$certain_weakness_id,Weakness_Service $weakness_Service)
    {
        $allweaknesses=$weakness_Service->update_weakness($request,$certain_weakness_id);
        return view('Weakness_List',compact('allweaknesses'));
    }

}


