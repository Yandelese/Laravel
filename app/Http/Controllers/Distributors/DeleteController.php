<?php

namespace App\Http\Controllers\Distributors;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Weaknesses;
use App\Services\Distributor_Service;


class DeleteController extends Controller
{
    public function __invoke($distributor_id, Distributor_Service $distributor_service)
    {
        $distributor_service->delete_distributor($distributor_id);
        $alldistributors=$distributor_service->get_all_distributors();
        return view('Distributor_list', compact('alldistributors'));

}}


