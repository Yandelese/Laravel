<?php

namespace App\Services;



use App\Models\Distributor;
use App\Models\Manufacturer;
use App\Models\Manufacturers_Weaknesses;
use App\Models\Weaknesses;

class Manufacture_Service
{
    public  function  get_all_manufactures(){
        $allmanufactures=Manufacturer::all();
        return $allmanufactures;}

    public function getweakness(){
        $weakness = Weaknesses::all();
        return $weakness;
    }

//    public function getdistributors(){
//        $distributors=Distributor::all();
//        return $distributors;
//    }


    public function add_to_DB($newbrand)
    {
        $weaknesses_id=$newbrand['weakness'];
        unset($newbrand['weakness']);
        $last_created_manufacture=Manufacturer::create($newbrand);
        foreach ($weaknesses_id as $weak_id){
            $last_created_weakness=Manufacturers_Weaknesses::firstOrCreate(
                ['brands_id' => $last_created_manufacture->id,
                    'weakness_id' => $weak_id]);}

        $weakness_certain_manufactures=$last_created_manufacture->get_weaknesses;
        $manufacturers=Manufacturer::all();
        return $manufacturers;
    }

    public function edit_manufactures($manufactures_id){
        $certain_manufacturer = Manufacturer::find($manufactures_id);
        return $certain_manufacturer;
    }

    public function delete_manufactures($certain_manufacturer_id){
        $certain_manufacturers=Manufacturer::find($certain_manufacturer_id);
        $certain_manufacturers->delete();
        $allmanufactures=Manufacturer::all();
        return $allmanufactures;
    }


}
