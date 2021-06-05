<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pemasok;
use App\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::all();
        return view('album.index', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemasok = Pemasok::all();
        return view('album.create')->with('pemasok',$pemasok);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function upload(){
        $gambar = Album::get();
        return view('index',['gambar' => $gambar]);
    }
    
    public function store(Request $request)
    {
        // dd($request->gambar);
        $this->validate($request,[
            'pemasok_id' => 'required',
    		'nama' => 'required',
            'penyanyi' => 'required',
            'harga' => 'required',
            'gambar' => 'mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required'
    	]);
        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->file('gambar');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,  $nama_file);
 
        Album::create([
            'pemasok_id' => $request->pemasok_id,
    		'nama' => $request->nama,
    		'penyanyi' => $request->penyanyi,
            'harga' => $request->harga,
            'gambar' => $nama_file,
            'deskripsi' => $request->deskripsi
    	]);
 
    	return redirect('/album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('album.edit', compact('album'));
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
        $album = Album::where('id', $id)->update([
            "nama" => $request["nama"],
            "penyanyi" => $request["penyanyi"],
            "harga" => $request["harga"],
            "gambar" => $request["gambar"],
            "deskripsi" => $request["deskripsi"]
        ]);

        return redirect('/album')->with('success', 'Data sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::destroy($id);
        return redirect('/album')->with('success', 'Data sukses dihapus');
    }

    
 

}
