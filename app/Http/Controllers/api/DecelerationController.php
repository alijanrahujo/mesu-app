<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Deceleration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DecelerationController extends Controller
{
    public function index()
    {
        // return "index dd";
        $dd = Deceleration::all();
        if ($dd) {
            $responce = [
                "success" => true,
                "data" => $dd,
                "message" => "Successfully"
            ];
        } else {
            $responce = [
                "success" => true,
                "data" => "",
                "message" => "No Record Found"
            ];
        }

        return response()->json($responce, 200);
    }
    public function create(Request $request)
    {
        // return "ddd creeate";
        $validator = Validator::make($request->all(), [
            'therapist_name' => 'required',
            'therapist_code' => 'required',
            'question_one' => 'required',
            'question_two' => 'required',
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
        $dd = Deceleration::create($input);
        $responce = [
            "success" => true,
            "data" => $dd,
            "message" => "Record Added Successfully"
        ];
        return response()->json($responce, 200);
    }
    public function show($id)
    {
        $dd = Deceleration::find($id);
        if ($dd) {
            $responce = [
                "success" => true,
                "data" => $dd,
                "message" => "Successfully"
            ];
        } else {
            $responce = [
                "success" => true,
                "data" => "",
                "message" => "No Record Found"
            ];
        }
        return response()->json($responce, 200);
    }
}
