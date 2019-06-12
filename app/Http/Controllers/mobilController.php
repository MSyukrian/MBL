<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;

class mobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $var ='Rian';
      $data = Mobil::all();
      return view('Mobil.index', compact('var','data'));
    }

       public function create()
    {
       return view('Mobil.tambah');
    }
        
    public function store(Request $Mobil)
    {
       Mobil::create($Mobil->all());
        return redirect('Mobil');
    }

      public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $mbl = mobil::find($id);
        return view('Mobil.ubah', compact('mbl'));
    }

     public function update(Request $Mobil, $id)
    {
        $mbl = $Mobil->all();
        mobil::find($id)->update($mbl);
        return redirect('Mobil');
    }

     public function destroy($id)
    {
    mobil::find($id)->delete();
    return redirect('Mobil');
    }
}
