<?php

namespace App\Http\Controllers\api;

use App\Models\Art;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtController extends Controller
{
    public function index()
    {
        $art = Art::all();
        $responce = [
            "success" => true,
            "data" => $art,
            "message" => "Successfully"
        ];
        return response()->json($responce, 200);
    }
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
        $responce = [
            "success" => true,
            "data" => $art,
            "message" => "Record Added Successfully"
        ];
        return response()->json($responce, 200);
    }
    public function show($id)
    {
        $art = Art::find($id);
        $responce = [
            "success" => true,
            "data" => $art,
            "message" => "Successfully"
        ];
        return response()->json($responce, 200);
    }
}
