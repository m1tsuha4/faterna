<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = file_get_contents('D:\Tugas Iqbal\Unand\Neo\Project\faterna\dosen.json');
        $data = json_decode($jsonData, true);

        foreach ($data as $user) {
            Dosen::create([
                'nama' => $user['nama'],
                'nidn' => $user['nidn'],
                'departemen' => $user['departemen'],
                'email' => $user['email'],
                'prodi' => $user['prodi'],
                'jabatan_akademik' => $user['jabatan_akademik'],
                'edukasi_s1' => $user['edukasi_s1'],
                'edukasi_s2' => $user['edukasi_s2'],
                'edukasi_s3' => $user['edukasi_s3'] ?? null,
                'link_sinta' => $user['link_sinta'] ?? null,
                'link_scopus' => $user['link_scopus'] ?? null,
                'link_scholar' => $user['link_scholar'] ?? null,
                'file' => $user['file'] ?? null,
                'profile' => $user['profile'] ?? null,
                'mata_kuliah' => $user['mata_kuliah'] ?? null,
                'bidang_keahlian' => $user['bidang_keahlian'] ?? null,
                'riset_interest' => $user['riset_interest'] ?? null,
            ]);
        }
    }
}
