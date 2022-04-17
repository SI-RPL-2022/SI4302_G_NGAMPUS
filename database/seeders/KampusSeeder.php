<?php

namespace Database\Seeders;
use App\Models\Kampus;

use Illuminate\Database\Seeder;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kampuses = [
            [
                'nama_kampus' => 'Telkom University',
                'desc_kampus' => 'Telkom University berdiri pada tanggal 14 Agustus 2013 berdasarkan Surat Keputusan Direktur Jenderal Pendidikan Tinggi Kemendikbud Nomor 309/E/0/2013. Telkom University adalah Perguruan Tinggi Swasta yang diselenggarakan oleh Yayasan Pendidikan Telkom, dan merupakan penggabungan dari empat Perguruan Tinggi Swasta, yaitu institut Teknologi Telkom (IT Telkom), Institut Manajemen Telkom (IM Telkom), Politeknik Telkom, dan Sekolah Tinggi Seni Rupa dan Desain Indonesia Telkom (STISI Telkom).\r\n Kampus yang berlokasi di Bandung ini memiliki akreditasi UNGGUL dan menempati peringkat 1 Perguruan Tinggi Swasta (PTS) di Indonesia versi Kemenristekdikti, Webometrics, Times Higher Education World University Ranking, Science and Technology (SINTA), UniRank dan SCImago, serta mendapatkan pemeringkatan dunia QS untuk kategori Online Learning bintang 5.',
                'picture' => 'Kampus/telkom.png',
                'fakultas1' => 'Fakultas Teknik Elektro',
                'jurusan1' => 'S1 Teknik Telekomunikasi - S1 Teknik Elektro - S1 Teknik Biomedis',
                'fakultas2' => 'Fakultas Rekayasa Industri',
                'jurusan2' => 'S1 Teknik Industri - S1 Sistem Informasi - S1 Teknik Logistik',
                'fakultas3' => 'Fakultas Informatika',
                'jurusan3' => 'S1 Informatika - S1 Teknologi Informasi - S1 Rekayasa Perangkat Lunak',
                'fakultas4' => 'Fakultas Komunikasi Bisnis',
                'jurusan4' => 'S1 Administrasi Bisnis - S1 Ilmu Komunikasi - S1 Digital Public Relation',
                'biaya' => 'https://smb.telkomuniversity.ac.id/biaya-pendidikan/biaya-pendidikan-reguler/',
            ],

            // kampus2
            [
                'nama_kampus' => 'Universitas Padjajaran',
                'desc_kampus' => 'tahukah kamu bahwa Universitas Padjadjaran berhasil menjadi universitas terfavorit di Indonesia selama bertahun-tahun? Sebagai salah satu universitas terbaik di Indonesia, Universitas Padjadjaran berhasil menarik minat siswa di Indonesia untuk bisa menempuh pendidikan di kampus Bumi Parahyangan ini. Tentu akan menjadi kebanggaan tersendiri bagi Quipperian yang berhasil bersaing dengan puluhan ribu siswa dan mendapatkan kursi untuk belajar di kampus yang memiliki jumlah mahasiswa asing terbanyak kedua di Indonesia ini.',
                'picture' => 'Kampus/unpad.png',
                'fakultas1' => 'Fakultas Kedokteran',
                'jurusan1' => 'S1 Pendidikan DOkter - S1 Kesehatan Masyarakat - S1 Kedokteran hewan - S1 Radiologi',
                'fakultas2' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
                'jurusan2' => 'S1 Matematika - S1 Farmasi - S1 Fisika - S1 Aktuaria - S1 Kimia',
                'fakultas3' => 'Fakultas Ilmu Komunikasi',
                'jurusan3' => 'S1 Ilmu Komunikasi - S1 Ilmu Perpustakaan - S1 Film dan Televisi - S1 Public Relation - S1 Jurnalistik',
                'fakultas4' => 'Fakultas EKonomi dan Bisnis',
                'jurusan4' => 'S1 Bisnis DIgital - S1 Akuntansi - S1 Ilmu Ekonomi - S1 Bisnis - S1 Manajemen Keuangan',
                'biaya' => 'http://smup.unpad.ac.id/',
            ],
            
            // kampus 3
            [
                'nama_kampus' => 'Institut Teknologi Bandung',
                'desc_kampus' => 'Institut Teknologi Bandung merupakan kampus impian bagi hampir semua pelajar di Indonesia, terutama yang ingin melanjutkan pendidikan pada bidang teknik/sains. Bagaimana tidak, kampus ini merupakan lokasi dari sekolah tinggi teknik pertama di Indonesia yang berdiri pada tahun 1920 dengan nama De Technische Hoogeschool te Bandung. Institut Teknologi Bandung telah lebih dari 50 tahun berkontribusi dalam menyelenggarakan pendidikan tinggi di Indonesia. Dan banyak banget lho tokoh-tokoh besar negeri ini yang merupakan alumni dari kampus ini!',
                'picture' => 'Kampus/itb.png',
                'fakultas1' => 'Fakultas Teknik Pertambangan dan Perminyakan',
                'jurusan1' => 'S1 Geofisika - S1 Teknik Pertambangan - S1 Ilmu Teknik - S1 Teknik Perminyakan',
                'fakultas2' => 'Fakultas Bisnis dan Manajemen',
                'jurusan2' => 'S1 Manajemen - S1 Administrasi Bisnis',
                'fakultas3' => 'Fakultas Teknik Sipil dan Lingkungan',
                'jurusan3' => 'S1 Perencanaan WIlayah dan kota - S1 Teknik Lingkungan - S1 Teknik Sipil',
                'fakultas4' => 'Fakultas Teknik Eletro dan Informatika',
                'jurusan4' => 'S1 Teknik Informatika - S1 Sistem Informasi - S1 Teknik ELektro - S1 Ilmu Komputer',
                'biaya' => 'https://biayakuliah.net/ukt-itb-bandung/',
            ],
            
        ];

        foreach ($kampuses as $key => $value) {
            Kampus::create($value);
        }
    }
}
    
