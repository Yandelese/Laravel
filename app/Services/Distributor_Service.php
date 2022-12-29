<?php

namespace App\Services;


use App\Models\Distributor;
use App\Models\Manufacturer;

class Distributor_Service
{
     public function add_new_distributor($new_distributor){
         Distributor::create($new_distributor);//create distributor
         $alldistributors=Distributor::all();// download all distributor from DataBase
     return $alldistributors;
     }

     public function get_brand_of_each_distributor(){
         $each_distributor_brands_list=[];// create array for distributors brands
         $alldistributors=Distributor::all();// download all distributor from DataBase
         foreach ($alldistributors as $distributor){
             $e_d_b=Manufacturer::find($distributor->manufacturer_id);
             array_push($each_distributor_brands_list,$e_d_b);
         }
         return $each_distributor_brands_list;
     }


     public function getallmanufacturers(){
         $allmanufacturers=Manufacturer::all();
         return $allmanufacturers;
     }

     public function delete_distributor($distributor_id){
         $distributor=Distributor::find($distributor_id);
         $distributor->delete();
     }

     public function get_all_distributors(){
         $alldistributor=Distributor::all();
         return $alldistributor;
     }

     public function get_distributor_by_id($distributor_id){
         $distributor=Distributor::find($distributor_id);
         return $distributor;
     }

     public function update_distributor_by_id($updated_distributor, $distributor_id){
         $distributor=Distributor::find($distributor_id);
         $distributor->update($updated_distributor);
//         $alldistributors=Distributor::all();
//         $manufacturers=Manufacturer::find($distributor->manufacturer_id);
//         $each_distributor_brands_list=[];
//         array_push($each_distributor_brands_list,$manufacturers);
     }

     public function create_distributor(){
         $all_manufactures=Manufacturer::all();
         return $all_manufactures;
     }
}
