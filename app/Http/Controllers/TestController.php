<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $nilai = [9,6,3,6,6,9,3,4,8,1,2,9];

        $nilaiRata = collect ($nilai)->contains(2);

        dd($nilaiRata);
    }
}
