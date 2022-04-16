<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            // webinar
            [
                'namaproduct' => 'Researchers Tips to Publications',
                'jenisproduct' => 'Webinar',
                'tanggal' => '2020-08-14',
                'desc' => 'Free Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'w1.jpg',
            ],
            [
                'namaproduct' => 'Ultrasound for Emergency Care in New Normal Era',
                'jenisproduct' => 'Webinar',
                'tanggal' => '2020-08-14',
                'desc' => 'Free Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'w1.jpg',
            ],
            [
                'namaproduct' => 'Masyarakat Well-Educated untuk Indonesia',
                'jenisproduct' => 'Webinar',
                'tanggal' => '2020-08-27',
                'desc' => 'Webinar Series bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'w2.jpg',
            ],
            [
                'namaproduct' => 'Webinar Generation Diversity',
                'jenisproduct' => 'Webinar',
                'tanggal' => '2020-06-12',
                'desc' => 'Webinar Generation Diversity Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'w3.jpg',
            ],
            [
                'namaproduct' => 'Becoming Indonesian Young Heroes',
                'jenisproduct' => 'Webinar',
                'tanggal' => '2020-12-18',
                'desc' => 'Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'w4.jpg',
            ],
            [
                'namaproduct' => 'Webinar UBSI NEXT',
                'jenisproduct' => 'Webinar',
                'tanggal' => '2020-08-26',
                'desc' => 'Webinar UBSI NEXT bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'w5.jpg',
            ],

            // kepo jurusan
            [
                'namaproduct' => 'Hukum',
                'jenisproduct' => 'Kepo Jurusan',
                'tanggal' => '2020-06-12',
                'desc' => 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'kj0.jpg',
            ],
            [
                'namaproduct' => 'Kimia',
                'jenisproduct' => 'Kepo Jurusan',
                'tanggal' => '2020-07-18',
                'desc' => 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'kj1.jpg',
            ],
            [
                'namaproduct' => 'Psikologi',
                'jenisproduct' => 'Kepo Jurusan',
                'tanggal' => '2020-12-05',
                'desc' => 'Kepo Jurusan Salah Jurusan Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'kj2.jpg',
            ],
            [
                'namaproduct' => 'Ilmu Komputer',
                'jenisproduct' => 'Kepo Jurusan',
                'tanggal' => '2021-06-23',
                'desc' => 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'kj3.jpg',
            ],
            [
                'namaproduct' => 'Sistem Informasi',
                'jenisproduct' => 'Kepo Jurusan',
                'tanggal' => '2020-12-20',
                'desc' => 'Kepo Jurusan Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'kj4.jpg',
            ],
            [
                'namaproduct' => 'Rekayasa Tekstil',
                'jenisproduct' => 'Kepo Jurusan',
                'tanggal' => '2021-04-10',
                'desc' => 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'kj5.jpg',
            ],

            // Major Experience
            [
                'namaproduct' => 'Membuat Virtual Tour',
                'jenisproduct' => 'Major Experience',
                'tanggal' => '2020-04-25',
                'desc' => 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'me0.jpg',
            ],
            [
                'namaproduct' => 'Teknik Dasar AutoCAD',
                'jenisproduct' => 'Major Experience',
                'tanggal' => '2021-02-13',
                'desc' => 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'me1.jpg',
            ],
            [
                'namaproduct' => 'Bisnis Generasi Milenial',
                'jenisproduct' => 'Major Experience',
                'tanggal' => '2021-03-13',
                'desc' => 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'me2.jpg',
            ],
            [
                'namaproduct' => 'A Great Art, Craft, and Design',
                'jenisproduct' => 'Major Experience',
                'tanggal' => '2021-12-05',
                'desc' => 'Major Experience Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'me3.jpg',
            ],
            [
                'namaproduct' => 'The Healing Power Of Journey',
                'jenisproduct' => 'Major Experience',
                'tanggal' => '2020-09-15',
                'desc' => 'Major Experience Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'me4.jpg',
            ],
            [
                'namaproduct' => 'Cara Mudah Membuat Aplikasi Android',
                'jenisproduct' => 'Major Experience',
                'tanggal' => '2021-04-10',
                'desc' => 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.',
                'picture' => 'me5.jpg',
            ],

        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}