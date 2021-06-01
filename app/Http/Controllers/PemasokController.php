<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pemasok;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasok = Pemasok::all();
        return view('pemasok.index', compact('pemasok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'
    	]);
 
        Pemasok::create([
    		'nama' => $request->nama,
    		'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone
    	]);
 
    	return redirect('/pemasok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemasok = Pemasok::find($id);
        return view('pemasok.show', compact('pemasok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemasok = Pemasok::find($id);
        return view('pemasok.edit', compact('pemasok'));
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
        $pemasok = Pemasok::where('id', $id)->update([
            "nama" => $request["nama"],
            "email" => $request["email"],
            "password" => $request["password"],
            "phone" => $request["phone"]
        ]);

        return redirect('/pemasok')->with('success', 'Data sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pemasok::destroy($id);
        return redirect('/pemasok')->with('success', 'Data sukses dihapus');
    }
}
