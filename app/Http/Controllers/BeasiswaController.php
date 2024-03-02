<?php

namespace App\Http\Controllers;

use App\Models\beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use function Ramsey\Uuid\v1;

class BeasiswaController extends Controller
{

    public function index()
    {
        $allbeasiswa = beasiswa::all();
        return view('admin.beasiswa',compact('allbeasiswa'));
    }

    public function create()
    {
        return view('admin.addbeasiswa');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'tanggal' => 'required',
                'link' => 'required',
            ]);

            $beasiswa = new beasiswa();
            $beasiswa->judul = $request->judul;
            $beasiswa->tanggal = $request->tanggal;
            $beasiswa->link = $request->link;

            $beasiswa->save();

            Alert::success('Success', 'beasiswa berhasil disimpan.');

            return redirect()->route('beasiswa');
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

            return redirect()->route('beasiswa')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(beasiswa $beasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(beasiswa $beasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beasiswa $beasiswa)
    {
        //
    }

    public function destroy($id)
    {
        try {
            $beasiswa = beasiswa::find($id);
            DB::table('beasiswas')->where('id', $id)->delete();
            Alert::success('Success', 'beasiswa berhasil dihapus');

            return redirect()->route('beasiswa');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('beasiswa');
        }
    }
}
