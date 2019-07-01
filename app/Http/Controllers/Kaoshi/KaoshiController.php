<?php

namespace App\Http\Controllers\Kaoshi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaoshiController extends Controller
{
    public function test()
    {
        return view('kaoshi.test');
    }
}
