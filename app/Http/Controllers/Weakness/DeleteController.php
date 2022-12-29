<?php

namespace App\Http\Controllers\Weakness;

use App\Http\Controllers\Controller;
use App\Models\Weaknesses;
use App\Services\Weakness_Service;


class DeleteController extends Controller
{
    public function __invoke($certain_weakness_id,Weakness_Service $weakness_Service)
    {
        $allweaknesses=$weakness_Service->delete_weakness_by_id($certain_weakness_id);
        return view('Weakness_List',compact('allweaknesses'));
    }

}


