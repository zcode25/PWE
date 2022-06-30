<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MahasiswaController extends Controller
{
    public function index() {
        return view('mahasiswa.index', [
            'mahasiswa' => Mahasiswa::all()
        ]);
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nim'               => 'required|max:11|min:11',
            'nama'              => 'required|max:50',
            'jenis_kelamin'     => 'required',
            'tgl_lahir'         => 'required',
            'jurusan'           => 'required|max:50',
            'fakultas'          => 'required|max:50',
            'alamat'            => 'required|max:100',
        ]);

        Mahasiswa::create($validatedData);

        return redirect()->route('home')->with('status', 'Data mahasiswa berhasil ditambah!'); 
    }

    public function edit($nim) {
        
        return view('mahasiswa.edit',  [
            'mahasiswa' => Mahasiswa::where('nim', $nim)->first()
        ]);
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'nim'               => 'required|max:11|min:11',
            'nama'              => 'required|max:50',
            'jenis_kelamin'     => 'required',
            'tgl_lahir'         => 'required',
            'jurusan'           => 'required|max:50',
            'fakultas'          => 'required|max:50',
            'alamat'            => 'required|max:100',
        ]);

        Mahasiswa::where('nim', $request->nim)->update($validatedData);

        return redirect()->route('home')->with('status', 'Data mahasiswa berhasil diubah!');
    }
    
    public function destroy($nim) {
        Mahasiswa::where('nim', $nim)->delete();
        return redirect()->route('home')->with('status', 'Data mahasiswa berhasil dihapus!'); 

    }

    public function cetak()  {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('mahasiswa.cetak', [
            'mahasiswa' => Mahasiswa::all()
        ]);
        return $pdf->stream();
    }
}
