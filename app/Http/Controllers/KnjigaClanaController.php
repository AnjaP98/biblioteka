<?php

namespace App\Http\Controllers;

use App\Http\Resources\KnjigaResource;
use App\Models\Knjiga;
use Illuminate\Http\Request;

class KnjigaClanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $knjige= Knjiga::all();
       return view('sveknjige', ['sveknjige' => Knjiga::latest()->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dodajknjigu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $knjiga = new Knjiga;
        $knjiga->naslov_knjige = $request->input('naslov_knjige');
        $knjiga->autor_knjige = $request->input('autor_knjige');

        $knjiga->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/izmeniknjigu');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $knjiga = Knjiga::find($id);
        $knjiga->naslov_knjige = $request->input('naslov_knjige');
        $knjiga->autor_knjige = $request->input('autor_knjige');

        $knjiga->update();
        return redirect('/home');
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Knjiga  $knjiga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $knjiga = Knjiga::find($id);
       $knjiga->delete();
       return redirect('/home');
    }
}
