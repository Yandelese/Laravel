<?php

namespace App\Http\Controllers\Weakness;
use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\Weaknesses;


class CreateController extends Controller
    {
       public function __invoke()
       {
           return view('Create_Weakness');
       }

}


