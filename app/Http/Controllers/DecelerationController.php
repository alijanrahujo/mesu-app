<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deceleration;

class DecelerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dd = Deceleration::all();
        return view("dd.index")->with('dd', $dd);
        // return view("dd.index");
        // Auth::user()->id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dd.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $input = $request->all();
        Deceleration::create($input);
        return redirect('dd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dd = Deceleration::find($id);
        return view("dd.show")->with("dd", $dd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dd = Deceleration::find($id);
        return view("dd.edit")->with("dd", $dd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dd = Deceleration::find($id);
        $input = $request->all();
        $dd->update($input);
        return redirect("dd")->with("flash_message", "Record Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
