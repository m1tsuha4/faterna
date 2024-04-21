<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\Overview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class OverviewController extends Controller
{
    public function index()
    {
        $overview = Overview::where('id' ,1)->first();
        return view('admin.overview',compact('overview'));
    }

    public function edit()
    {
        $overview = Overview::where('id' ,1)->first();
        return view('admin.editoverview', compact('overview'));
    }

    public function update(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'jumlah_mahasiswa' => 'required',
                'jumlah_prodi' => 'required',
                'jumlah_dosen' => 'required',
                'jumlah_lab' => 'required',
            ]);

            $overview = Overview::updateOrCreate(
                ['id' => 1],
                [
                    'mahasiswa' => $request->jumlah_mahasiswa,
                    'prodi' => $request->jumlah_prodi,
                    'dosen' => $request->jumlah_dosen,
                    'labor' => $request->jumlah_lab
                ]
            );

            Alert::success('Success', 'Overview berhasil disimpan.');

            return redirect()->route('overview');
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

            return redirect()->route('overview')->withInput();
        }
    }


}
