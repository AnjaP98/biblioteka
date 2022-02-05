<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\DbCommand;
use App\Models\Clan;

//use Database\Seeders\DB;
use DateTime;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ClanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sviclanovi= Clan::all();
        return view('sviclanovi', ['sviclanovi' => Clan::latest()->paginate(20)]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function add()
    // {
    //     return view('dodajclana');
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function show(Clan $clan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function edit(Clan $clan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clan $clan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
       $clan = Clan::find($id);
       $clan->delete();
       return redirect('/home');
    }

  
    public function create(Request $request)
    {
       
		return view('dodajclana');
              
			
		
    }
    public function store(Request $request)
    {

        $clan = new Clan;
        $clan->ime_prezime = $request->input('ime_prezime');
        $clan->kategorija_id = $request->input('kategorija_id');

        $clan->save();
        return redirect('/home');
    }
}

?>
