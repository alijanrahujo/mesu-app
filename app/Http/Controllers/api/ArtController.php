<?php

namespace App\Http\Controllers\api;

use App\Models\Art;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
            'filename' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                "success" => false,
                "message" => $validator->errors()
            ];
            return response()->json($response, 400);
        }
        $input = $request->all();
        $input['mesu_id'] = Auth::user()->id;
        $input['filename'] = $request->filename->store('public/uploads/');
        $input['status'] = 1;
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
