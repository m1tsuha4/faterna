<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AlumniController extends Controller
{
    public function index()
    {
        $allalumni = alumni::all();
        return view('admin.alumni',compact('allalumni'));
    }

    public function create()
    {
        return view('admin.addalumni');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'tahun' => 'required',
                'wisuda' => 'required',
                'file' => 'required|file',
            ]);

            $alumni = new alumni();
            $alumni->tahun = $request->tahun;
            $alumni->wisuda = $request->wisuda;
            $alumni->tanggal = now();

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/alumni', $fileName); // path_to_store adalah path untuk menyimpan file
                $alumni->file = $fileName;
            }

            $alumni->save();

            Alert::success('Success', 'alumni berhasil disimpan.');

            return redirect()->route('alumni');
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

            return redirect()->route('alumni')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumni $alumni)
    {
        //
    }


    public function destroy($id)
    {
        try {
            $alumni = alumni::find($id);
            DB::table('alumnis')->where('id', $id)->delete();
            Storage::delete('public/alumni/' . $alumni->file);
            Alert::success('Success', 'alumni berhasil dihapus');

            return redirect()->route('alumni');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('alumni');
        }
    }
}
