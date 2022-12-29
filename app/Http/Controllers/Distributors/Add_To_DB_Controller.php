<?php

namespace App\Http\Controllers\Distributors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Distributor\Add_To_DB_Request;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Manufacturers_Weaknesses;
use App\Models\Weaknesses;
use App\Services\Distributor_Service;


class Add_To_DB_Controller extends Controller
{
    public function __invoke(Add_To_DB_Request $request,Distributor_Service $distributor_service)
    {
        $new_distributor = $request->validated();
        $alldistributors=$distributor_service->add_new_distributor($new_distributor);
        $each_distributor_brands_list=$distributor_service->get_brand_of_each_distributor();
        return view('Distributor_list', compact('alldistributors','each_distributor_brands_list'));
    }

}


