<?php

namespace Database\Seeders;
use App\Models\Faq;

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'pertanyaan' => 'fitur apa saja yang dimiliki ngampus ?',
                'jawaban' => 'ngampus memiliki 3 fitur utama, kepojurusan, online class dan major experience.',
                'kategori' => 'Pertanyaan Umum',
            ],
            [
                'pertanyaan' => 'apakah bisa mengikuti kegiatan di website ngampus tanpa harus mendaftar ?',
                'jawaban' => 'tidak bisa ya, untuk mengikuti kegiatan yangadaa di ngampus, sobat ngampus harus mendaftar dulu ya',
                'kategori' => 'Pertanyaan Umum',
            ],
            [
                'pertanyaan' => 'apa aja benefit yang kita daapt kalo mengikuti kegiatan di website ngampus ?',
                'jawaban' => 'sobat ngampus bakal dapat banyak benefit loh, misalnya sobat ngampus bisa menemukan berbagai macam jurusan dan juga kampus yang mungkin sobat ngampus belum tahu, sobat ngampus juga bisa dapat teman loh dari website ini dan banyak ilmu ketika sobat ngampus mengikuti kegiatan yang ada di website ini.',
                'kategori' => 'Pertanyaan Umum',
            ],
            [
                'pertanyaan' => 'ngampus itu website apa sih ?',
                'jawaban' => 'jadi ngampus ini merupakan website yang biasanya digunakan untuk menemukan jurusan serta kampus yang cocok untuk sobat ngampus yang baru ingin berkuliah. jadi dengan mengikuti kegiatan di ngampus, sobat ngampus jadi tau minat sobat ngampus apa dan bisa tuh dijurukan ke jurusan yang sesuai dg minat sobat ngampus.',
                'kategori' => 'Pertanyaan Umum',
            ],
            [
                'pertanyaan' => 'gimana sih caranya buat bisa ngikutin kegiatan di online class ini ?',
                'jawaban' => 'caranya gampang banget ya sobat ngampus. hanya perlu login jika sudah punya akun, kemudian, klik fitur online class, pilih kegiatan online class yang ingin sobat ngampus ikutin lalu daftar dan isi data diri sobat ngampus yaa',
                'kategori' => 'Seputar Produk',
            ],
            [
                'pertanyaan' => 'di online class ini biasanya bahas apa aja kak ?',
                'jawaban' => 'baik sobat ngampus, untuk produk online class sendiri biasanya membahas topik untuk setiap jurusan, misalnya sobat ngampus mengikuti kegiatan online class : sistem informasi nah bakal dibahas disitu di jurusan itu ngapain aja, ada mata kuliah apa aja, susah dan gampangnya jurusan itu , begitu sobat ngampus.',
                'kategori' => 'Seputar Produk',
            ],
            [
                'pertanyaan' => 'bisa ga kita mengikuti kegiatan online class ini lebih dari 1 ?',
                'jawaban' => 'tentunya bisa dong, tinggal disesuaikan aja waktunya sama waktunya sobat ngampus.',
                'kategori' => 'Seputar Produk',
            ],
            [
                'pertanyaan' => 'kak di artikel itu isi nya apa aja ?',
                'jawaban' => 'baik sobat ngampus, di artikel yang ada di website ngampus ini biasanya diisi dengan berbagai macam jurusan dan juga kampus di indonesia loh, jadi artikel nya bisa dibaca sama sobat ngampus siapa tau sobat ngampus tertarik untuk daftar ke kampus atau ke jurusan tersebut',
                'kategori' => 'Seputar Produk',
            ],
            [
                'pertanyaan' => 'untuk produk yang major experience biasanya mereka ngebahas apa ? ',
                'jawaban' => 'Major Experience akan membawa pembahasan seputar pengenalan dunia pengalaman dari ahlinya mengenai skill apa saja yang di kembangkan, prospek karir, dll .',
                'kategori' => 'Seputar Produk',
            ],
            [
                'pertanyaan' => 'untuk produk kepojurusan biasanya ngebahasin apa kak ? ',
                'jawaban' => 'di kepo jurusan biasanya ngebahas seputar jurusan dong pastinya dan pasti setiap harinya banyak kepojurusan yang bisa diikuti oleh sobat ngampus tentunya.',
                'kategori' => 'Seputar Produk',
            ],
        ];

        foreach ($faqs as $key => $value) {
            Faq::create($value);
        }
    }
}
