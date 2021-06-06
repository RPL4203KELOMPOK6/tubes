<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cpemasok;

class CpemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasok = Cpemasok::all();
        return view('admin.pindex', compact('pemasok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pcreate');
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
 
        Cpemasok::create([
    		'nama' => $request->nama,
    		'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone
    	]);
 
    	return redirect('/admin/datapemasok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemasok = Cpemasok::find($id);
        return view('admin.pshow', compact('pemasok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemasok = Cpemasok::find($id);
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
        $pemasok = Cpemasok::where('id', $id)->update([
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
        Cpemasok::destroy($id);
        return redirect('admin/datapemasok')->with('success', 'Data sukses dihapus');
    }
    
}
