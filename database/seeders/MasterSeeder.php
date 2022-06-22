<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Master;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masters = [
        [
            'jenis' => 'Kepo Jurusan',
            'keterangan' => 'Kepo Jurusan akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas',
        ],
        [
            'jenis' => 'Major Experience',
            'keterangan' => 'Major Experience akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas',
        ],
        [
            'jenis' => 'Webinar',
            'keterangan' => 'Webinar akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas',
        ],
    ];

    foreach ($masters as $key => $value) {
        Master::create($value);
    }
    }
}
