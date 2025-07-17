<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $anaks = Anak::when($keyword, function ($query) use ($keyword) {
            $query->where('nama', 'like', "%$keyword%")
                  ->orWhere('nama_orang_tua', 'like', "%$keyword%");
        })->latest()->paginate(10);

        return view('anaks.index', compact('anaks', 'keyword'));
    }

    public function create() {
        return view('anaks.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_orang_tua' => 'required',
            'alamat' => 'required',
        ]);

        Anak::create($request->all());
        return redirect()->route('anaks.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $anak = Anak::findOrFail($id); 
        return view('anaks.edit', compact('anak'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nama_orang_tua' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $anak = Anak::findOrFail($id);
        $anak->update($validated);

        return redirect()->route('anaks.index')->with('success', 'Data anak berhasil diupdate.');
    }


    public function destroy(Anak $anak) {
        $anak->delete();
        return redirect()->route('anaks.index')->with('success', 'Data berhasil dihapus');
    }
}
