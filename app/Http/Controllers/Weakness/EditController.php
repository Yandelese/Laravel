<?php

namespace App\Http\Controllers\Weakness;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Weakness_Service;


class EditController extends Controller
{
    public function __invoke($weakness_id, Weakness_Service $weakness_Service)
    {
        $certain_weakness=$weakness_Service->find_weakness_by_id($weakness_id);
        return view('Edit_Weakness',compact('certain_weakness'));
    }

}


