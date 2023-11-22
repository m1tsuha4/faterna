<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DokumenController extends Controller
{

    public function index()
    {
        $alldokumen = dokumen::all();
        return view('admin.dokumen',compact('alldokumen'));
    }

    public function create()
    {
        return view('admin.addokumen');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'file' => 'required|file',
            ]);

            $dokumen = new dokumen();
            $dokumen->judul = $request->judul;
            $dokumen->tanggal = now();

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/dokumen', $fileName); // path_to_store adalah path untuk menyimpan file
                $dokumen->file = $fileName;
            }

            $dokumen->save();

            Alert::success('Success', 'dokumen berhasil disimpan.');

            return redirect()->route('dokumen');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors()->messages();

            $errorMessage = 'Terjadi kesalahan:';
            foreach ($errors as $field => $fieldErrors) {
                $errorMessage .= "\n- {$field}: " . implode(', ', $fieldErrors);
            }

            Alert::error('Error', $errorMessage);

            return redirect()->back()->withInput()->withErrors($errors);
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('dokumen')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(dokumen $dokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dokumen $dokumen)
    {
        //
    }

    public function destroy($id)
    {
        try {
            $dokumen = dokumen::find($id);
            DB::table('dokumens')->where('id', $id)->delete();
            Storage::delete('public/dokumen/' . $dokumen->file);
            Alert::success('Success', 'Dokumen berhasil dihapus');

            return redirect()->route('dokumen');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('dokumen');
        }
    }
}
