<?php

namespace App\Http\Controllers;

use App\Models\Nekochan;
use Illuminate\Http\Request;

class NekochansController extends Controller
{
    public function index()
    {
        $nekochans = Nekochan::where('name', 'うめ')
            ->orderBy('name')
            ->take(10)
            ->get()
            ->toArray()
            ;

        // dd($nekochans);

        return view('nekochan/index');
    }
}
