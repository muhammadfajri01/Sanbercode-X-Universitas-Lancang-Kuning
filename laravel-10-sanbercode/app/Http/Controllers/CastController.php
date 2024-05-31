<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function index()
    {
        $cast = cast::all();
        $success = session('success');
        return view('halaman.cast.index', compact('cast', 'success'));
    }

    public function create()
    {
        return view('halaman.cast.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'

        ]);

        Cast::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);

        return redirect()->route('cast');
    }

    public function show($id)
    {
        $cast = Cast::find($id);
        return view('halaman.cast.show', compact('cast'));
    }

    public function edit($id)
    {
        $cast = Cast::find($id);
        return view('halaman.cast.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        $cast = Cast::find($id);
        $cast->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);

        return redirect()->route('cast');
    }

    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect()->route('cast')->with('success', 'Data Cast ' . $cast->nama . ' Berhasil Dihapus');
    }
}
