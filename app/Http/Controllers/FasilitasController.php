<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FasilitasController extends Controller
{
    public function index()
    {
        $allFasilitas = Fasilitas::all();
        return view('admin.fasilitas',compact('allFasilitas'));
    }

    public function create()
    {
        return view('admin.addfasilitas');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'file' => 'required|file',
            ]);

            $fasilitas = new fasilitas();
            $fasilitas->nama = $request->nama;
            $fasilitas->deskripsi = $request->deskripsi;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/fasilitas', $fileName); // path_to_store adalah path untuk menyimpan file
                $fasilitas->file = $fileName;
            }

            $fasilitas->save();

            Alert::success('Success', 'Fasilitas berhasil ditambahkan.');

            return redirect()->route('allfasilitas');
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

            return redirect()->route('allfasilitas')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $fasilitas = Fasilitas::find($id);
            DB::table('fasilitas')->where('id', $id)->delete();
            Storage::delete('public/fasilitas/' . $fasilitas->file);
            Alert::success('Success', 'galeri berhasil dihapus');

            return redirect()->route('allfasilitas');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('allfasilitas');
        }
    }
}
