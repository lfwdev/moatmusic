<?php

namespace App\Http\Controllers;

use App\Moat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\JsonDecoder;

class ArtistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index($id = false)
    {
        return ((!$id == false) ?
            view('artist',['artist' => (new Moat\Artists())->fetchDataLinkById($id)]) :
            view('artists',['artists' => (new Moat\Artists())->getArtists()])
        );
    }
}
