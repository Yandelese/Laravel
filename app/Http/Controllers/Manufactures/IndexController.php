<?php

namespace App\Http\Controllers\Manufactures;

use App\Http\Controllers\Controller;
use App\Services\Manufacture_Service;


class IndexController extends Controller{

    public function __invoke(Manufacture_Service $manufacture_service){

        $this->authorize('view',auth()->user());
        $manufacturers=$manufacture_service->get_all_manufactures();
        return view('index', compact('manufacturers'));
    }

}


