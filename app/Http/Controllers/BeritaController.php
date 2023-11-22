<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $allberita = berita::all();
        return view('admin.admindashboard',compact('allberita'));
    }

    public function create()
    {
        return view('admin.addberita');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'file' => 'required|file|image|mimes:jpeg,png,jpg',
            ]);

            $berita = new berita();
            $berita->judul = $request->judul;
            $berita->deskripsi = $request->deskripsi;
            $berita->tanggal = now();

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/berita', $fileName); // path_to_store adalah path untuk menyimpan file
                $berita->file = $fileName;
            }

            $berita->save();

            Alert::success('Success', 'berita berhasil disimpan.');

            return redirect()->route('dashboardadmin');
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

            return redirect()->route('dashboardadmin')->withInput();
        }
    }

    public function show(berita $berita)
    {
        //
    }

    public function edit($id)
    {
        $berita = berita::find($id);
        return view('admin.editberita',compact('berita'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
//                'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $berita = berita::find($id);

            if(!$berita){
                return redirect()->route('dashboardadmin')->with('error', 'Ruangan tidak ditemukan');
            }

            $berita->judul = $request->judul;
            $berita->deskripsi = $request->deskripsi;
            $berita->tanggal = now();

            if ($request->hasFile('file')) {
                Storage::delete('public/berita/' . $berita->file);
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/berita', $fileName);
                $berita->file = $fileName;
            }

            $berita->save();

            Alert::success('Success', 'berita berhasil disimpan.');

            return redirect()->route('dashboardadmin');
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
            return redirect()->route('dashboardadmin')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $berita = berita::find($id);
            DB::table('beritas')->where('id', $id)->delete();
            Storage::delete('public/berita/' . $berita->file);
            Alert::success('Success', 'Berita berhasil dihapus');

            return redirect()->route('dashboardadmin');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('dashboardadmin');
        }
    }
}
