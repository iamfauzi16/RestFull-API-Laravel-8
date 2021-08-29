<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Foods;

class FoodsControllers extends Controller
{
   function post(Request $request)
   {

      $foods = New Foods;
      $foods->name = $request->name;
      $foods->images = $request->images;
      $foods->description = $request->description;
      $foods->unit = $request->unit;
      $foods->price = $request->price;

      $foods->save();
      return response()->json(
      [
         "message"=> "Metode Post Success"
      ]
      );
   }

   function get()
   {

      $data = Foods::all();
      return response()->json(
      [
         "data" => $data
      ]
      );
   }
   function getById($id)
   {

      $data = Foods::where('id', $id)->get();
      return response()->json(
      [
         "data" => $data
      ]
      );
   }

   function put($id, Request $request) 
   {
      

      $foods = Foods::where('id', $id)->first();
      if($foods) {
         $foods->name = $request->name ? $request->name: $foods->name;
         $foods->images = $request->images ? $request->images: $foods->images;
         $foods->description = $request->description ? $request->description : $foods->description;
         $foods->unit = $request->unit ? $request->unit : $foods->unit;
         $foods->price = $request->price ? $request->price : $foods->price;

         $foods->save();
         return response()->json(
         [
            // "message" => "Metode Put Success" 
            "data" => $foods
         ]
         );
      }
      return response()->json(
         [
            "message" => "Error" .$id
         ], 400
      );
   }

   function delete($id)
   {
      $foods = Foods::where('id', $id)->first();
      if($foods){
         return response()->json(
            [
               "message" => "id " .$id. " ditemukan"
            ]
            );
      }
      return response()->json(
         [
            "message" => "id " .$id . " tidak ditemukan"
         ],
         400
         );
    
   }  

}
