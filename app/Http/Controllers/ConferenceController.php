<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ConferenceController extends Controller
{
    public function index()
    {
        $allConference = Conference::all();
        return view('admin.conference',compact('allConference'));
    }

    public function create()
    {
        return view('admin.addconference');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'tanggal' => 'required',
                'file' => 'required|file',
            ]);

            $conf = new Conference();
            $conf->judul = $request->judul;
            $conf->tanggal = $request->tanggal;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/conference', $fileName); // path_to_store adalah path untuk menyimpan file
                $conf->file = $fileName;
            }

            $conf->save();

            Alert::success('Success', 'Data Conference berhasil disimpan.');

            return redirect()->route('allconference');
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

            return redirect()->route('allconference')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $conf = Conference::find($id);
            DB::table('conferences')->where('id', $id)->delete();
            Storage::delete('public/conference/' . $conf->file);
            Alert::success('Success', 'Data Conference berhasil dihapus');

            return redirect()->route('allconference');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('allconference');
        }
    }
    
}
