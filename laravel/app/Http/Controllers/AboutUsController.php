<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function main() {
        return view('site.about-us');
    }
}
