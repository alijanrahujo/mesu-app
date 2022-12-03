<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deceleration;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $mesu['total_mesu'] = User::all()->except(['id' => 1])->count();
        $mesu['active_mesu'] = User::where('status', 1)->count();
        $mesu['therapist'] = Deceleration::all()->count();


        return view('dashboard', compact('mesu'));
        return view('dashboard', compact('mesu'));
    }
}
