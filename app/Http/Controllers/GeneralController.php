<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class GeneralController extends Controller
{
    //
    //public function redirectToGeneral()
    //{
    //    return redirect()->route('general');
    //}
    
    //public function showGeneral()
    //{
    //    return view('categories.general');
    //}
    
    public function redirectToDrivers()
    {
        return redirect()->route('drivers');
    }
    

    public function showGeneral()
    {
        $threads = Thread::where('thread_cat', 1)->get();
        return view('categories.general', ['threads' => $threads]);
    }

    public function showTeams()
    {
        $teams = Thread::where('thread_cat', 2)->get();
        return view('categories.general', ['threads' => $teams]);
    }

    public function showDrivers()
    {
        $threads = Thread::where('thread_cat', 3)->get();
        return view('categories.general', ['threads' => $threads]);
    }

    public function showSupport()
    {
        $threads = Thread::where('thread_cat', 4)->get();
        return view('categories.general', ['threads' => $threads]);
    }

}
