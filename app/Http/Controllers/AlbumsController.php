<?php

namespace App\Http\Controllers;

use App\Moat;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\JsonDecoder;

class AlbumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //
    public function index()
    {
        return  view('albums', ['content' => Album::fetchAllWithArtistName()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('albums.new', ['artists' => (new Moat\Artists())->getArtists()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'artist_id' => 'required',
        ]);

        Album::create($request->all());

        return redirect()->route('albums.index')
            ->with('success','Album created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  view('albums', ['content' => Album::fetchByIdWithArtistName($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  view('albums.edit', ['album' => Album::fetchByIdWithArtistName($id), 'artists' => (new Moat\Artists())->getArtists()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'artist_id' => 'required',
        ]);

        Album::find($id)->update($request->all());

        return redirect()->route('albums.index')
            ->with('success','Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::find($id)->delete();

        return redirect()->route('albums.index')
            ->with('success','Album deleted successfully');
    }
}
