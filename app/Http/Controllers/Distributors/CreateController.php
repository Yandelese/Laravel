<?php

namespace App\Http\Controllers\Distributors;
use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Distributor_Service;


class CreateController extends Controller
    {
       public function __invoke(Distributor_Service $distributor_service)
       {
           $all_manufactures=$distributor_service->create_distributor();
           return view('Create_Distributors', compact('all_manufactures'));
       }

}


