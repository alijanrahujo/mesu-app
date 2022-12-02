<?php

namespace App\Http\Controllers\api;

use App\Models\Art;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'test_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                "success" => false,
                "message" => $validator->errors()
            ];
            return response()->json($response, 400);
        }
        $input = $request->all();
        $art = Art::create($input);
        // $success['token'] = $art->createToken("myApp")->plainTextToken;
        // $success['name'] = $art->name;
        $responce = [
            "success" => true,
            // "data" => $success,
            "message" => "Record Added Successfully"
        ];
        return response()->json($responce, 200);
    }
    public function show($id)
    {
        $art = Art::find($id);
        return view("art.show")->with("art", $art);
    }
}
