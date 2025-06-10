<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function register()
    {
        return view('page.pendaftaran');
    }

    public function welcome(Request $request)
    {
        $fullname = $request->input('fname');
        $biodata = $request->input('bio');

        return view('page.home', ["fullname" => $fullname, "biodata" => $biodata]);
    }
}
