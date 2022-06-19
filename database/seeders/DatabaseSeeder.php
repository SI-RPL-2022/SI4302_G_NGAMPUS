<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'no_telp' => '081234567890',
                'is_admin' => '1',
                'picture' => 'profile-admin.jpg',
                'birthAt' => null,
                'birthDate' => null,
                'kota' => null,
                'provinsi' => null,
                'negara' => null,
                'pekerjaan' => null,
                'asalSekolah' => null,
                'kelas' => null,
                'jurusan' => null,
                'desc' => null,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Fakhri',
                'email' => 'fakhri@gmail.com',
                'no_telp' => '082345678901',
                'is_admin' => '0',
                'picture' => 'profile1.jpg',
                'birthAt' => 'depok',
                'birthDate' => '2001-08-24',
                'kota' => 'depok',
                'provinsi' => 'Jawa Barat',
                'negara' => 'indonesia',
                'pekerjaan' => 'pelajar',
                'asalSekolah' => 'SMA 1 Depok',
                'kelas' => '11',
                'jurusan' => 'ipa',
                'desc' => 'saya adalah pelajar kelas 11 yang berfokus dibidang sains',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Pradita',
                'email' => 'pradita@gmail.com',
                'no_telp' => '083456789012',
                'is_admin' => '0',
                'picture' => 'profile2.jpg',
                'birthAt' => 'Bogor',
                'birthDate' => '2001-09-25',
                'kota' => 'Bogor',
                'provinsi' => 'Jawa Barat',
                'negara' => 'Indonesia',
                'pekerjaan' => 'Pelajar',
                'asalSekolah' => 'SMKN 1 Cibinong',
                'kelas' => '12',
                'jurusan' => 'Multimedia',
                'desc' => 'Saya adalah pelajar SMK kelas 12, saat ini saya berfokus pada desain grafis dan teknologi tapi masih bingung mengenai jurusan yang saya pilih',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Alif',
                'email' => 'alif@gmail.com',
                'no_telp' => '084567890123',
                'is_admin' => '0',
                'picture' => 'profile3.jpg',
                'birthAt' => 'tasikmalaya',
                'birthDate' => '2001-06-25',
                'kota' => 'tasikmalaya',
                'provinsi' => 'jawa barat',
                'negara' => 'indonesia',
                'pekerjaan' => 'pelajar',
                'asalSekolah' => 'PONPES Tasikmalaya',
                'kelas' => '11',
                'jurusan' => 'Keagamaan',
                'desc' => 'saya merupakan pelajar kelas 11 PONPES tasikmalaya, yang berfokus pada keagamaan',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Virza',
                'email' => 'virza@gmail.com',
                'no_telp' => '085678901234',
                'is_admin' => '0',
                'picture' => 'profile4.jpg',
                'birthAt' => 'jayapura',
                'birthDate' => '2001-10-19',
                'kota' => 'jayapura',
                'provinsi' => 'papua',
                'negara' => 'indonesia',
                'pekerjaan' => 'pelajar',
                'asalSekolah' => 'sma n 3 jayapura',
                'kelas' => '12',
                'jurusan' => 'ipa',
                'desc' => 'saya merupakan pelajar kelas 12, yang berfokus pada peminatan MIPA',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Rafi',
                'email' => 'rafi@gmail.com',
                'no_telp' => '086789012345',
                'is_admin' => '0',
                'picture' => 'profile5.jpg',
                'birthAt' => 'bekasi',
                'birthDate' => '2001-05-21',
                'kota' => 'bekasi',
                'provinsi' => 'DKI Jakarta',
                'negara' => 'indonesia',
                'pekerjaan' => 'pelajar',
                'asalSekolah' => 'SMA 1 Bekasi',
                'kelas' => '12',
                'jurusan' => 'ipa',
                'desc' => 'saya merupakan pelajar kelas 12 yang berfokus pada peminatan MIPA',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
