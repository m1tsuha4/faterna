<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KalenderController extends Controller
{
    public function index()
    {
        $allKalender = kalender::all();
        return view('admin.kalender',compact('allKalender'));
    }

    public function create()
    {
        return view('admin.addkalender');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'file' => 'required|file',
            ]);

            $kalender = new kalender();
            $kalender->judul = $request->judul;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/kalender', $fileName); // path_to_store adalah path untuk menyimpan file
                $kalender->file = $fileName;
            }

            $kalender->save();

            Alert::success('Success', 'kalender berhasil disimpan.');

            return redirect()->route('kalender');
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

            return redirect()->route('kalender')->withInput();
        }
    }


    public function destroy($id)
    {
        try {
            $kalender = kalender::find($id);
            DB::table('kalenders')->where('id', $id)->delete();
            Storage::delete('public/kalender/' . $kalender->file);
            Alert::success('Success', 'kalender berhasil dihapus');

            return redirect()->route('kalender');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('kalender');
        }
    }
}
