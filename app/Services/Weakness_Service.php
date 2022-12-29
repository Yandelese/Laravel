<?php

namespace App\Services;

use App\Http\Requests\Weakness\Update_Request;
use App\Models\Weaknesses;

class Weakness_Service
{
    public function add_to_DB($new_weakness){
       Weaknesses::create($new_weakness);
       $allweaknesses=Weaknesses::all();
       return $allweaknesses;
    }

    public function find_weakness_by_id($weakness_id){
        $certain_weakness=Weaknesses::find($weakness_id);
        return $certain_weakness;
    }

    public function update_weakness(Update_Request $request,$certain_weakness_id){
        $updated_weakness=$request->validated();
        $certain_weakness=Weaknesses::find($certain_weakness_id);
        $certain_weakness->update($updated_weakness);
        $allweaknesses=Weaknesses::all();
        return $allweaknesses;
    }

    public function delete_weakness_by_id($certain_weakness_id){
        $certain_weakness=Weaknesses::find($certain_weakness_id);
        $certain_weakness->delete();
        $allweaknesses=Weaknesses::all();
        return $allweaknesses;
    }





}
