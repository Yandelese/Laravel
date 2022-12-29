<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Manufacturer;
//use App\Models\Manufacturers_Weaknesses;
//
//
//class MainController extends Controller
//{
////    public function index(){
////        dump("sadasd");
//////         $manufacturers=Manufacturer::all();
//////         $distributors=Distributor::all();
////        return view('login');}
///////////////////////////////////////////////////////////////////////////////////
////    public function create(){
////        $weakness = Weaknesses::all();
////        $distributors=Distributor::all();
////        return view('create', compact('weakness','distributors'));}
//////////////////////////////////////////////////////////////////////////////////////
////    public function create_distributors(){
////        $all_manufactures=Manufacturer::all();
////        return view('create_distributors', compact('all_manufactures'));}
///////////////////////////////////////////////////////////////////////////////////////////
////    public function add_distributor_to_db(){
////        $new_distributor = request()->validate([
////            'name' => 'required',
////            'manufacturer_id'=>'',
////        ]);
////        Distributor::create($new_distributor);
////        $alldistributors=Distributor::all();
////
////        $each_distributor_brands_list=[];
////
////        foreach ($alldistributors as $distributor){
////           $e_d_b=Manufacturer::find($distributor->manufacturer_id);
////           array_push($each_distributor_brands_list,$e_d_b);
////        }
////
////
////
////        return view('distributor_list', compact('alldistributors','each_distributor_brands_list'));
////    }
/////////////////////////////////////////////////////////////////////////////////////////////
//
//    public function store(){
//        $newbrand = request()->validate([
//            'name' => 'required',
//            'model' => 'required',
//            'country_of_origin' => 'required',
//            'price' => 'required',
//            'weakness'=>'']);
//        $weaknesses_id=$newbrand['weakness'];
//        unset($newbrand['weakness']);
//        $last_created_manufacture=Manufacturer::create($newbrand);
//            foreach ($weaknesses_id as $weak_id){
//            $last_created_weakness=Manufacturers_Weaknesses::firstOrCreate(
//                ['brands_id' => $last_created_manufacture->id,
//                 'weakness_id' => $weak_id]);}
//
//            $weakness_certain_manufactures=$last_created_manufacture->get_weaknesses;
//            $manufacturers=Manufacturer::all();
//            dump($weakness_certain_manufactures);
//
//      return view('manufacturer_list',compact('manufacturers','weakness_certain_manufactures'));
//    }
//////////////////////////////////////////////////////////////////////////////////////////////
//    public function show($manufacturer_id){
//        $certain_manufacturer = Manufacturer::findOrFail($manufacturer_id);
//        $certain_manufacturers_distributors=$certain_manufacturer->get_distributors;
//        $certain_manufacturer_weaknesses=$certain_manufacturer->get_weaknesses;
//
//        return view('show', compact('certain_manufacturer','certain_manufacturers_distributors','certain_manufacturer_weaknesses'));}
//////////////////////////////////////////////////////////////////////////////////////////////////////
//    public function edit($id){
//        $certain_manufacturer = Manufacturer::find($id);
//        $certain_manufacturers_distributors=$certain_manufacturer->get_distributors;
//        return view('edit', compact('certain_manufacturer','certain_manufacturers_distributors'));}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////    public function update($id){
////        $certain_item = Brands::find($id);
////        $updated_item = request()->validate([
////            'name' => '',
////            'type' => '',
////            'country_of_origin' => '',
////            'importers_id' => ''
////        ]);
////        $importers_id = $updated_item['importers_id'];// pump out all importers_id from updated_item
////        unset($updated_item['importers_id']);//delete importers_id (in order to save it to db)
////        $certain_item->update($updated_item);//save updated item
////        dump($certain_item->importers);
////    //    $brands_importers_table = brands_importers::all();
//////        foreach ($importers_id as $kkk) {
//////        }
////
////   //     foreach ($brands_importers_table as $brands_importer_each_object) {
////     //       dd($brands_importers_table);
////       //     dd($brands_importer_each_object);
//////            if ($brands_importer_each_object->brands_id == $certain_item->id) {
//////                $brands_importer_each_object->importers_id = $kkk;
//////                $brands_importer_each_object->update();
//////            }
////        }
////        return redirect(route('show', $certain_item->id));
//
////////////////////////////////////////////////////////////////////////////////////////////////////
//
////    public function add_weakness(){
////        return view('create_weakness');
////    }
///////////////////////////////////////////////////////////////////////////////////////////////////
////    public function add_weakness_to_db(){
////      $new_weakness= request()->validate([
////           'name' => 'required']);
////      Weaknesses::create($new_weakness);
////      $allweaknesses=Weaknesses::all();
////      return view('weakness_list',compact('allweaknesses'));
////}
/////////////////////////////////////////////////////////////////////////////////////////////////////////
////    public function edit_weakness($weakness_id){
////        $certain_weakness=Weaknesses::find($weakness_id);
////        return view('edit_weakness',compact('certain_weakness'));
////    }
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
////    public function update_certain_weakness ($certain_weakness_id){
////        $certain_weakness=Weaknesses::find($certain_weakness_id);
////        $updated_weakness=(request()->validate(['name'=> 'required']));
////        $certain_weakness->update($updated_weakness);
////        $allweaknesses=Weaknesses::all();
////        return view('weakness_list',compact('allweaknesses'));
////    }
////////////////////////////////////////////////////////////////////////////////////////////////////
////    public function delete_certain_weakness($certain_weakness_id){
////        $certain_weakness=Weaknesses::find($certain_weakness_id);
////        $certain_weakness->delete();
////        $allweaknesses=Weaknesses::all();
////        return view('weakness_list',compact('allweaknesses'));
////    }
///////////////////////////////////////////////////////////////////////////////////////////////////
//
////   public function edit_distributor($distributor_id){
////        $distributor=Distributor::find($distributor_id);
////       $manufacturers=Manufacturer::find($distributor->manufacturer_id);
////       $allmanufacturers=Manufacturer::all();
////       return view('edit_distributor',compact('distributor','manufacturers','allmanufacturers'));
////   }
////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////   public function update_distributor($distributor_id){
////
////        $updated_distributor=request()->validate(['name'=>'required',
////                                                  'manufacturer_id'=>'required']);
////       $distributor=Distributor::find($distributor_id);
////       $distributor->update($updated_distributor);
////       $alldistributors=Distributor::all();
////       return view('distributor_list', compact('alldistributors'));
////   }
///////////////////////////////////////////////////////////////////////////////////////////////////////
////   public function delete_distributor($distributor_id){
////       $distributor=Distributor::find($distributor_id);
////       $distributor->delete();
////       $alldistributors=Distributor::all();
////       $each_distributor_brands_list=[];
////
////       foreach ($alldistributors as $distributor){
////           $e_d_b=Manufacturer::find($distributor->manufacturer_id);
////           array_push($each_distributor_brands_list,$e_d_b);
////       }
////       return view('distributor_list', compact('alldistributors','each_distributor_brands_list'));
////   }
///////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////   public function edit_manufactures($manufactures_id){
////       $certain_manufacturer = Manufacturer::find($manufactures_id);
////       return view('edit_manufactures',compact('certain_manufacturer'));
////   }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////    public function update_manufactures($certain_manufacturer_id){
////        $updated_manufactures=request()->validate(['name'=>'required',
////                             'model' => 'required',
////                             'price'=> 'required',
////                              'country_of_origin'=> 'required']);
////        $certain_manufacturer=Manufacturer::find($certain_manufacturer_id);
////        $certain_manufacturer->update($updated_manufactures);
////        $manufacturers=Manufacturer::all();
////        $weakness_certain_manufactures=Weaknesses::all();
////        return view('manufacturer_list',compact('manufacturers','weakness_certain_manufactures'));
////    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////    public function delete_manufactures($certain_manufacturer_id){
////        $certain_manufacturers=Manufacturer::find($certain_manufacturer_id);
////        $certain_manufacturers->delete();
////    }
//}
//
//
