<?php

namespace App\Http\Controllers\Distributors;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Distributor_Service;


class EditController extends Controller
{
    public function __invoke($distributor_id, Distributor_Service $distributor_service)
    {
       $certain_distributor=$distributor_service->get_distributor_by_id($distributor_id);
       $allmanufacturers=$distributor_service->getallmanufacturers();
       return view('Edit_Distributor',compact('certain_distributor','allmanufacturers'));
    }

}


