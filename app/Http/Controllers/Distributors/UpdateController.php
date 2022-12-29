<?php

namespace App\Http\Controllers\Distributors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Distributor\Update_Request;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Distributor_Service;


class UpdateController extends Controller
{
    public function __invoke( Update_Request $request,$distributor_id, Distributor_Service $distributor_service)
    {

        $updated_distributor=$request->validated();
        $distributor_service->update_distributor_by_id($updated_distributor,$distributor_id);
        $alldistributors=$distributor_service->get_all_distributors();

        return view('Distributor_list', compact('alldistributors'));
    }

}


