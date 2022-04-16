<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestimoniProduk;

class TestimoniProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimoniproduk = [
            // kepo jurusan
            [
                'id_user' => 2,
                'jenisproduct' => 'Kepo Jurusan',
                'name' => 'Fakhri',
                'desc' => 'Saya sebagai peserta kepo jurusan merasa sangat terbantu dengan adanya platform ngampus dalam menentukan jurusan kuliah, terimakasih',
                'show' => 'yes',
                'picture' => 'profile1.jpg',
            ],
            [
                'id_user' => 3,
                'jenisproduct' => 'Kepo Jurusan',
                'name' => 'Pradita',
                'desc' => 'Terimakasih ngampus buat platformnya, berguna banget buat saya yang lagi bingung nyari-nyari informasi buat jurusan yang emang saya tuju',
                'show' => 'yes',
                'picture' => 'profile2.jpg',
            ],
            [
                'id_user' => 4,
                'jenisproduct' => 'Kepo Jurusan',
                'name' => 'Alif',
                'desc' => 'Kepo Jurusan ini tuh bener-bener akan membantu kamu untuk menentukan jurusan impianmu, serius deh ga boong, ayok daftar ngampus sekarang',
                'show' => 'yes',
                'picture' => 'profile3.jpg',
            ],
            [
                'id_user' => 5,
                'jenisproduct' => 'Kepo Jurusan',
                'name' => 'Virza',
                'desc' => 'Aaaaa keren banget ngampus buat kepo jurusannya, aku jadi kebantu banget buat nentuin jurusan apa yang mau aku ambil, thank you ngampus',
                'show' => 'no',
                'picture' => 'profile4.jpg',
            ],

            // major experience
            [
                'id_user' => 6,
                'jenisproduct' => 'Major Experience',
                'name' => 'Rafi',
                'desc' => 'Gokil, Major Experience bener-bener ngebantu gua buat tau gimana sih gambaran dunia kuliah tentang skill yang dipelajari, keren ngampus',
                'show' => 'yes',
                'picture' => 'profile5.jpg',
            ],
            [
                'id_user' => 2,
                'jenisproduct' => 'Major Experience',
                'name' => 'Fakhri',
                'desc' => 'Saya sebagai peserta Major Experience merasa sangat terbantu dengan adanya platform ngampus dalam memberikan gambaran kuliah',
                'show' => 'yes',
                'picture' => 'profile1.jpg',
            ],
            [
                'id_user' => 3,
                'jenisproduct' => 'Major Experience',
                'name' => 'Pradita',
                'desc' => 'Terimakasih Ngampus, programnya berguna banget, ga sia-sia daftar buat ikut major experience dari ngampus, keren banget sih ngampus ini',
                'show' => 'yes',
                'picture' => 'profile2.jpg',
            ],
            [
                'id_user' => 4,
                'jenisproduct' => 'Major Experience',
                'name' => 'Alif',
                'desc' => 'Major Experience ini tuh bener-bener akan membantu kamu buat belajar skill apa aja yang dibutuhin dengan didampingi expertnya langsuuung',
                'show' => 'no',
                'picture' => 'profile3.jpg',
            ],

            // webinar
            [
                'id_user' => 5,
                'jenisproduct' => 'Webinar',
                'name' => 'Virza',
                'desc' => 'Pokoknya ngampus mantep bet dah tema webinarnya menarik yaitu seputar dunia perkuliahan dengan narasumber yang berpengalaman dibidangnya',
                'show' => 'yes',
                'picture' => 'profile4.jpg',
            ],
            [
                'id_user' => 6,
                'jenisproduct' => 'Webinar',
                'name' => 'Rafi',
                'desc' => 'Webinar ngampus ga kaleng-kaleng pokonya mantep, daftarnya gampang, materinya gokil keren abis, narasumbernya juga goks, mantap pokonya',
                'show' => 'yes',
                'picture' => 'profile5.jpg',
            ],
            [
                'id_user' => 2,
                'jenisproduct' => 'Webinar',
                'name' => 'Fakhri',
                'desc' => 'Saya sebagai peserta Webinar merasa sangat terbantu dengan adanya platform ngampus dalam memberikan tema webinar yang sangat menarik',
                'show' => 'yes',
                'picture' => 'profile1.jpg',
            ],
            [
                'id_user' => 3,
                'jenisproduct' => 'Webinar',
                'name' => 'Pradita',
                'desc' => 'Applause buat ngampuss, webinarnya keren, materinya oke, narsumnya ajib, kurang apa lagi coba? next mau coba daftar lagi tema lain',
                'show' => 'no',
                'picture' => 'profile2.jpg',
            ],

        ];

        foreach ($testimoniproduk as $key => $value) {
            TestimoniProduk::create($value);
        }
    }
}
