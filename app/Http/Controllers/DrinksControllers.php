<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drinks;

class DrinksControllers extends Controller
{

    function post(Request $request) {
        $drinks = New Drinks;
        $drinks->name = $request->name;
        $drinks->description = $request->description;
        $drinks->unit = $request->unit;
        $drinks->price = $request->price;
    
        $drinks->save();

        return response()->json(
            [
                "Message"=> "Success"
            ]
            );
    }

    function get()
    {
        $drinks = Drinks::all();

        return response()->json(
            [
                "Message"=> $drinks
            ]
            );
    }

    function getById($id)
    {
        $drinks = Drinks::where('id', $id)->first();
        {
            return response()->json(
                [
                    "Message"=>"Get by".$id. "Drinks!"
                ]
                );
        }
    }

    function put($id, Request $request)
    {
        $drinks = Drinks::where('id', $id)->first();
        if($drinks){
            $drinks->name = $request->name ? $request->name : $drinks->name;
            $drinks->description = $request->description ? $request->description : $drinks->description;
            $drinks->unit = $request->unit ? $request->unit : $drinks->unit;
            $drinks->price = $request->price ? $request->price : $drinks->price;

            $drinks->save();
            return response()->json(
                [
                    "Message"=> $drinks
                ]
                );
        }
        return response()->json(
            [
                "Message"=> "Erorr" .$id
            ],
            400
            );
    }

    function delete($id)
    {
        $drinks = Drinks::where('id', $id)->first();
        if($drinks){
            return response()->json(
                [
                    "Message"=> "Telah di Hapus " .$id
                ]
                );
        }
        return response()->json(
            [
                "Message"=> "Tidak terdeteksi "  .$id
            ]
            );
    }
}
