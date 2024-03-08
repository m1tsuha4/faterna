<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DosenController extends Controller
{

    public function index()
    {
        $alldosen = dosen::all();
        return view('admin.dosen',compact('alldosen'));
    }

    public function create()
    {
        return view('admin.addosen');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nidn' => 'required',
                'departemen' => 'required',
                'email' => 'required',
                'jabatan_akademik' => 'required',
                'file' => 'required|file',
            ]);

            $dosen = new dosen();
            $dosen->nama = $request->nama;
            $dosen->nidn = $request->nidn;
            $dosen->departemen = $request->departemen;
            $dosen->email = $request->email;
            $dosen->jabatan_akademik = $request->jabatan_akademik;
            $dosen->edukasi_s1 = $request->edukasi_s1;
            $dosen->edukasi_s2 = $request->edukasi_s2;
            $dosen->edukasi_s3 = $request->edukasi_s3;
            $dosen->link_sinta = $request->publikasi;
            $dosen->link_scopus = $request->penelitian;
            $dosen->link_scholar = $request->scholar;


            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/dosen', $fileName); // path_to_store adalah path untuk menyimpan file
                $dosen->file = $fileName;
            }

            $dosen->save();

            Alert::success('Success', 'dosen berhasil disimpan.');

            return redirect()->route('dosen-admin');
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

            return redirect()->route('dosen-admin')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(dosen $dosen)
    {
        //
    }

    public function edit($id)
    {
        $dosen = dosen::find($id);
        return view('admin.editdosen',compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'nidn' => 'required',
                'departemen' => 'required',
                'email' => 'required',
                'jabatan_akademik' => 'required',
            ]);
            $dosen = dosen::find($id);

            if(!$dosen){
                return redirect()->route('dosen-admin')->with('error', 'Ruangan tidak ditemukan');
            }

            $dosen->nama = $request->nama;
            $dosen->nidn = $request->nidn;
            $dosen->departemen = $request->departemen;
            $dosen->email = $request->email;
            $dosen->jabatan_akademik = $request->jabatan_akademik;
            $dosen->edukasi_s1 = $request->edukasi_s1;
            $dosen->edukasi_s2 = $request->edukasi_s2;
            $dosen->edukasi_s3 = $request->edukasi_s3;
            $dosen->link_sinta = $request->publikasi;
            $dosen->link_scopus = $request->penelitian;
            $dosen->link_scholar = $request->scholar;


            if ($request->hasFile('file')) {
                Storage::delete('public/dosen/' . $dosen->file);
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/dosen', $fileName); // path_to_store adalah path untuk menyimpan file
                $dosen->file = $fileName;
            }

            $dosen->save();

            Alert::success('Success', 'dosen berhasil disimpan.');

            return redirect()->route('dosen-admin');
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

            return redirect()->route('dosen-admin')->withInput();
        }
    }


    public function destroy($id)
    {
        try {
            $dosen = dosen::find($id);
            DB::table('dosens')->where('id', $id)->delete();
            Storage::delete('public/dosen/' . $dosen->file);
            Alert::success('Success', 'Dosen berhasil dihapus');

            return redirect()->route('dosen-admin');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('dosen-admin');
        }
    }
}
