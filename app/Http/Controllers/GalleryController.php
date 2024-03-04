<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function index()
    {
        $allGallery = galeri::all();
        return view('admin.gallery',compact('allGallery'));
    }

    public function create()
    {
        return view('admin.addgallery');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'file' => 'required|file',
            ]);

            $galeri = new galeri();
            $galeri->judul = $request->judul;
            $galeri->deskripsi = $request->deskripsi;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/galeri', $fileName); // path_to_store adalah path untuk menyimpan file
                $galeri->file = $fileName;
            }

            $galeri->save();

            Alert::success('Success', 'galeri berhasil disimpan.');

            return redirect()->route('galeri');
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

            return redirect()->route('galeri')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $galeri = galeri::find($id);
            DB::table('galeris')->where('id', $id)->delete();
            Storage::delete('public/galeri/' . $galeri->file);
            Alert::success('Success', 'galeri berhasil dihapus');

            return redirect()->route('galeri');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('galeri');
        }
    }
}
