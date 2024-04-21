<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KerjasamaController extends Controller
{
    public function index()
    {
        $allKerjasama = Kerjasama::all();
        return view('admin.kerjasama',compact('allKerjasama'));
    }

    public function create()
    {
        return view('admin.addkerjasama');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'file' => 'required|file',
                'jenis' => 'required',
            ]);

            $kerjasama = new Kerjasama();
            $kerjasama->judul = $request->judul;
            $kerjasama->jenis = $request->jenis;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/kerjasama', $fileName); // path_to_store adalah path untuk menyimpan file
                $kerjasama->file = $fileName;
            }

            $kerjasama->save();

            Alert::success('Success', 'Kerjasama berhasil disimpan.');

            return redirect()->route('allkerjasama');
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

            return redirect()->route('allkerjasama')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $kerjasama = Kerjasama::find($id);
            DB::table('kerjasamas')->where('id', $id)->delete();
            Storage::delete('public/kerjasama/' . $kerjasama->file);
            Alert::success('Success', 'kerjasama berhasil dihapus');

            return redirect()->route('allkerjasama');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('allkerjasama');
        }
    }

}
