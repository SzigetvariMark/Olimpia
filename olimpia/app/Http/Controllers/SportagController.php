<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SportagController extends Controller
{
    public function index()
    {
        $sportagak = DB::table('sportagak')->get();

        return view('index', ['sportagak' => $sportagak]);
    }
}
