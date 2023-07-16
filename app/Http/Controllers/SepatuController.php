<?php

namespace App\Http\Controllers;

use App\Models\Jenissepatu;
use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Sepatu::all();
        return view('sepatu.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sepatu.create',[
            'jenissepatu' => Jenissepatu::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sepatu::create(
            [
                'sepatu_id_jenissepatu' => $request->sepatu_id_jenissepatu,
                'sepatu_nama' => $request->sepatu_nama,
                'sepatu_harga' => $request->sepatu_harga,
                'sepatu_stock' => $request->sepatu_stock
            ]
        );

        return redirect('sepatu')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Sepatu::findOrFail($id);
        return view('sepatu.edit', [
            'jenissepatu' => Jenissepatu::get()
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Sepatu::findOrFail($id);
        $row->update(
            [
                'sepatu_id_jenissepatu' => $request->sepatu_id_jenissepatu,
                'sepatu_nama' => $request->sepatu_nama,
                'sepatu_harga' => $request->sepatu_harga,
                'sepatu_stock' => $request->sepatu_stock
            ]
        );
        return redirect('sepatu')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Sepatu::findOrFail($id);
        $row->delete();

        return redirect('sepatu')->with('success', 'Data berhasil dihapus');
    }
}