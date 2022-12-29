<?php

namespace App\Http\Controllers\Manufactures;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manufactures\Add_To_DB_Request;
use App\Models\Distributor;
use App\Models\Weaknesses;
use App\Services\Manufacture_Service;


class CreateController extends Controller
    {
       public function __invoke(Manufacture_Service $manufacture_Service)
       {
           $weakness=$manufacture_Service->getweakness();
//           $distributors=$manufacture_Service->getdistributors();
           return view('Create_Manufactures', compact('weakness'));
       }

}


