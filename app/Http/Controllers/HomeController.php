<?php

namespace App\Http\Controllers;

use App\Moat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\JsonDecoder;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('dashboard',['content' => (new Moat\Artists())->asArray()]);
    }
}
