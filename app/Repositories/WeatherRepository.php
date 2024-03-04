<?php
namespace App\Repositories;
use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherRepository
{
   public function getPaginate($request)
   {
      $base = new Weather;
      return $base->get();
   }
   
   public function created($request)
   {
      // $MQ7 = HTTP::GET('https://api.thingspeak.com/channels/1537281/fields/1.json?api_key=VL32957PDVO254CZ');
      // $json_MQ7 = json_decode($MQ7, TRUE);
      // $data_MQ7 = ($json_MQ7['feeds']);
      // $jumlah = sizeof($data_MQ7);
      // $jml_arr = $data_MQ7[$jumlah-1]['field1'];
      // $conv_jml_data = (int)$jml_arr;
      // return view("admin.sesnor_ph.ph_kolam1",compact('data','jumlah','a','f','d','g','b'));

      $weather = new Weather;
      $weather->MQ7 = $request->admin_name;
      // $admin->bank_name = $request->bank_name;
      // $admin->rekening_number = $request->rekening_number;
      // $admin->bank_personal_name = $request->bank_personal_name;
      $weather->save();
      return $weather;
   }
}

//  public function updated($request, $id)
//  {
//     $admin = Admin::find($id);
//     $admin->admin_name = isset($request->admin_name) ? $request->admin_name: $admin->admin_name;
//     $admin->bank_name = isset($request->bank_name) ? $request->bank_name: $admin->bank_name;
//     $admin->rekening_number = isset($request->rekening_number) ? $request->rekening_number: $admin->rekening_number;
//     $admin->bank_personal_name = isset($request->bank_personal_name) ? $request->bank_personal_name: $admin->bank_personal_name;
//     $admin->save();
//     return $admin;
//  }
//  public function getById($id)
//  {
//     $admin = Admin::find($id);
//     return $admin;
//  }
//  public function deleted($id):void
//  {
//     $admin = Admin::find($id);
//     $admin->delete();
//  }