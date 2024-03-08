<?php

namespace App\Http\Controllers;


use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SopLayananPpidController extends Controller
{
    public function index()
    {
        $allSop = sop::all();
        return view('admin.soplayananpublik',compact('allSop'));
    }

    public function create()
    {
        return view('admin.addsoplayananpublik');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required',
                'file' => 'required|file',
            ]);

            $sop = new sop();
            $sop->judul = $request->judul;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->hashName(); // atur nama file sesuai kebutuhan
                $file->storeAs('public/sop', $fileName); // path_to_store adalah path untuk menyimpan file
                $sop->file = $fileName;
            }

            $sop->save();

            Alert::success('Success', 'sop-ppid berhasil disimpan.');

            return redirect()->route('sop-ppid');
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

            return redirect()->route('sop-ppid')->withInput();
        }
    }


    public function destroy($id)
    {
        try {
            $sop = sop::find($id);
            DB::table('sops')->where('id', $id)->delete();
            Storage::delete('public/sop/' . $sop->file);
            Alert::success('Success', 'sop-ppid berhasil dihapus');

            return redirect()->route('sop-ppid');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());

            return redirect()->route('sop-ppid');
        }
    }
}
