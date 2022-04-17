<?php

namespace Database\Seeders;
use App\Models\Jurusan;

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusans = [
            // jurusan 1
            [
                'nama_jurusan' => 'Hubungan Internasional',
                'desc_jurusan' => 'Hubungan Internasional berkaitan erat dengan upaya suatu negara menghadapi tantangan internasional seperti ketidakseimbangan perdagangan dunia, isu keamanan, masalah lingkungan secara global, dan kemiskinan melalui kerja sama antarnegara. Kuliah di jurusan ini memungkinkanmu untuk merasakan atmosfer internasional melalui berbagai simulasi pertemuan-pertemuan penting di dunia, salah satunya sidang PBB. Seru kan Quipperian? Hubungan antarnegara aja dijaga, apalagi hubungan kita?',
                'alasan1' => 'Lulusan Hubungan Internasional menjadi salah satu prioritas bagi Kementerian Luar Negeri dalam merekrut calon Diplomat.',
                'alasan2' => 'Selama belajar di jurusan ini kamu akan dibentuk untuk menjadi seorang yang siap untuk go international!',
                'alasan3' => 'Dengan semakin banyaknya perusahaan multinasional, pilihan lapangan kerja bagi lulusan jurusan Hubungan Internasional semakin bervariasi.',
                'alasan4' => 'Dengan kemampuan analisis akan masalah-masalah di dunia Internasional, industri media juga membutuhkan lulusan Hubungan Internasional baik di depan maupun di belakang layar',
                'prospek1' => 'Diplomat',
                'prospek2' => 'Politisi',
                'prospek3' => 'Konsultan',
                'prospek4' => 'Tenaga Pendidikan',
                'prospek5' => 'Pegawai Negeri Sipil',
                'prospek6' => 'Eksportir',
            ],

            // jurusan 2
            [   
                'nama_jurusan' => 'Sistem Informasi',
                'desc_jurusan' => 'Jurusan Sistem Informasi adalah bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini kamu akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan. Jadi, selain belajar teknik pemrograman, kamu juga dituntut untuk mempelajari proses bisnis yang ada di perusahaan. Oleh karena itu, lulusan Prodi Sistem Informasi diharapkan dapat mengembangkan sebuah sistem pengolahan data dari berbagai sumber untuk dapat disajikan sebagai informasi yang bermanfaat bagi perusahaan.',
                'alasan1' => 'Prospek karier lulusan Sistem Informasi sangat menjanjikan, apalagi dengan semakin pesatnya perkembangan teknologi di jaman seperti sekarang ini',
                'alasan2' => 'Ilmu yang kamu pelajari di bangku kuliah sangat aplikatif, jadi bisa memudahkanmu dalam beradaptasi di lingkungan kerja.',
                'alasan3' => 'Kamu punya keterampilan dalam mendesain web, alhasil banyak instansi yang melirikmu untuk bergabung. Kamu pun bisa membuka lapangan pekerjaan dengan mendirikan usaha pengembangan web',
                'alasan4' => 'Peluang untuk melanjutkan studi pascasarjana dengan beasiswa terbuka lebar untukmu',
                'prospek1' => 'System Analyst',
                'prospek2' => 'Business Analyst',
                'prospek3' => 'Data Analyst',
                'prospek4' => 'Programmer',
                'prospek5' => 'IT Consultant',
                'prospek6' => 'System Engineer',
            ],

            // jurusan 3
            [
                'nama_jurusan' => 'Teknik Informatika',
                'desc_jurusan' => 'Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. Di Jurusan Teknik Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.',
                'alasan1' => 'Di era revolusi industri 4.0 seperti sekarang ini, lulusan Teknik Informatika sangat dibutuhkan oleh instansi pemerintah, BUMN, maupun perusahaan-perusahaan swasta. Perusahaan seperti besar Google juga patut kamu jajal.',
                'alasan2' => 'Berbekal keilmuan dan keterampilan yang diperoleh sewaktu kuliah, kamu bisa mendirikan start-up sendiri lho. Sekalian menciptakan lapangan pekerjaan kan?',
                'alasan3' => 'Di dunia digital ini, kamu bisa berkreasi dengan bebas untuk mewujudkan ide-idemu.',
                'alasan4' => 'Kamu pun bisa bekerja sebagai independent self-employe dengan menjadi konsultan dalam pengembangan suatu sistem menggunakan software database tertentu.',
                'prospek1' => 'back end developer',
                'prospek2' => 'Front end developer',
                'prospek3' => 'Fullstack developer',
                'prospek4' => 'System Analyst',
                'prospek5' => 'IT Consultant',
                'prospek6' => 'Data Scientist',
            ],
            
        ];

        foreach ($jurusans as $key => $value) {
            Jurusan::create($value);
        }
    }
}