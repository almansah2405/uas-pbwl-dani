<?php

namespace App\Http\Controllers;

use App\Models\Jenissepatu;
use Illuminate\Http\Request;

class JenissepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Jenissepatu::all();
        return view('jenissepatu.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenissepatu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jenissepatu::create(
            [
                'jenissepatu_nama' => $request->jenissepatu_nama
            ]
        );

        return redirect('jenissepatu')->with('success','Data berhasil ditambahkan');
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
        $row = Jenissepatu::findOrFail($id);
        return view('jenissepatu.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Jenissepatu::findOrFail($id);
        $row->update(
            [
                'jenissepatu_nama' => $request->jenissepatu_nama
            ]
        );
        return redirect('jenissepatu')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Jenissepatu::findOrFail($id);
        $row->delete();

        return redirect('jenissepatu')->with('success', 'Data berhasil dihapus');
    }
}