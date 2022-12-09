<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class SheetController extends Controller
{
    public function index()
    {
        $sheetdb = new SheetDB("m2z0n6oski0r0");
        $sheetdb->create(['name' => 'Ali']);
        dd($sheetdb->get());
    }
    public function create()
    {
        $sheetdb = new SheetDB("m2z0n6oski0r0");
        $sheetdb->create(['name' => 'Ali']);
    }
}
