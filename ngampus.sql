-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2022 pada 05.21
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `jurusan` varchar(255) NOT NULL,
  `desc_jurusan` longtext NOT NULL,
  `alasan_1` varchar(255) NOT NULL,
  `alasan_2` varchar(255) NOT NULL,
  `alasan_3` varchar(255) NOT NULL,
  `alasan_4` varchar(255) NOT NULL,
  `prospek_1` varchar(255) NOT NULL,
  `prospek_2` varchar(255) NOT NULL,
  `prospek_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`jurusan`, `desc_jurusan`, `alasan_1`, `alasan_2`, `alasan_3`, `alasan_4`, `prospek_1`, `prospek_2`, `prospek_3`) VALUES
('Sistem Informasi', 'Jurusan Sistem Informasi adalah bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini kamu akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan. Jadi, selain belajar teknik pemrograman, kamu juga dituntut untuk mempelajari proses bisnis yang ada di perusahaan. Oleh karena itu, lulusan Prodi Sistem Informasi diharapkan dapat mengembangkan sebuah sistem pengolahan data dari berbagai sumber untuk dapat disajikan sebagai informasi yang bermanfaat bagi perusahaan.', 'Prospek karier lulusan Sistem Informasi sangat menjanjikan, apalagi dengan semakin pesatnya perkembangan teknologi di jaman seperti sekarang ini.', 'Ilmu yang kamu pelajari di bangku kuliah sangat aplikatif, jadi bisa memudahkanmu dalam beradaptasi di lingkungan kerja.', 'Kamu punya keterampilan dalam mendesain web, alhasil banyak instansi yang melirikmu untuk bergabung. Kamu pun bisa membuka lapangan pekerjaan dengan mendirikan usaha pengembangan web.', 'Peluang untuk melanjutkan studi pascasarjana dengan beasiswa terbuka lebar untukmu, Quipperian.', 'System analyst', 'Business Analyst', 'Data Analyst');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_jurusan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prospek1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prospek2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prospek3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prospek4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prospek5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prospek6` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusans`
--

INSERT INTO `jurusans` (`id`, `created_at`, `updated_at`, `nama_jurusan`, `desc_jurusan`, `alasan1`, `alasan2`, `alasan3`, `alasan4`, `prospek1`, `prospek2`, `prospek3`, `prospek4`, `prospek5`, `prospek6`) VALUES
(1, '2022-04-17 23:03:48', '2022-04-17 23:03:48', 'Hubungan Internasional', 'Hubungan Internasional berkaitan erat dengan upaya suatu negara menghadapi tantangan internasional seperti ketidakseimbangan perdagangan dunia, isu keamanan, masalah lingkungan secara global, dan kemiskinan melalui kerja sama antarnegara. Kuliah di jurusan ini memungkinkanmu untuk merasakan atmosfer internasional melalui berbagai simulasi pertemuan-pertemuan penting di dunia, salah satunya sidang PBB. Seru kan Quipperian? Hubungan antarnegara aja dijaga, apalagi hubungan kita?', 'Lulusan Hubungan Internasional menjadi salah satu prioritas bagi Kementerian Luar Negeri dalam merekrut calon Diplomat.', 'Selama belajar di jurusan ini kamu akan dibentuk untuk menjadi seorang yang siap untuk go international!', 'Dengan semakin banyaknya perusahaan multinasional, pilihan lapangan kerja bagi lulusan jurusan Hubungan Internasional semakin bervariasi.', 'Dengan kemampuan analisis akan masalah-masalah di dunia Internasional, industri media juga membutuhkan lulusan Hubungan Internasional baik di depan maupun di belakang layar', 'Diplomat', 'Politisi', 'Konsultan', 'Tenaga Pendidikan', 'Pegawai Negeri Sipil', 'Eksportir'),
(2, '2022-04-17 23:03:48', '2022-04-17 23:03:48', 'Sistem Informasi', 'Jurusan Sistem Informasi adalah bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini kamu akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan. Jadi, selain belajar teknik pemrograman, kamu juga dituntut untuk mempelajari proses bisnis yang ada di perusahaan. Oleh karena itu, lulusan Prodi Sistem Informasi diharapkan dapat mengembangkan sebuah sistem pengolahan data dari berbagai sumber untuk dapat disajikan sebagai informasi yang bermanfaat bagi perusahaan.', 'Prospek karier lulusan Sistem Informasi sangat menjanjikan, apalagi dengan semakin pesatnya perkembangan teknologi di jaman seperti sekarang ini', 'Ilmu yang kamu pelajari di bangku kuliah sangat aplikatif, jadi bisa memudahkanmu dalam beradaptasi di lingkungan kerja.', 'Kamu punya keterampilan dalam mendesain web, alhasil banyak instansi yang melirikmu untuk bergabung. Kamu pun bisa membuka lapangan pekerjaan dengan mendirikan usaha pengembangan web', 'Peluang untuk melanjutkan studi pascasarjana dengan beasiswa terbuka lebar untukmu', 'System Analyst', 'Business Analyst', 'Data Analyst', 'Programmer', 'IT Consultant', 'System Engineer'),
(3, '2022-04-17 23:03:48', '2022-04-17 23:03:48', 'Teknik Informatika', 'Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. Di Jurusan Teknik Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.', 'Di era revolusi industri 4.0 seperti sekarang ini, lulusan Teknik Informatika sangat dibutuhkan oleh instansi pemerintah, BUMN, maupun perusahaan-perusahaan swasta. Perusahaan seperti besar Google juga patut kamu jajal.', 'Berbekal keilmuan dan keterampilan yang diperoleh sewaktu kuliah, kamu bisa mendirikan start-up sendiri lho. Sekalian menciptakan lapangan pekerjaan kan?', 'Di dunia digital ini, kamu bisa berkreasi dengan bebas untuk mewujudkan ide-idemu.', 'Kamu pun bisa bekerja sebagai independent self-employe dengan menjadi konsultan dalam pengembangan suatu sistem menggunakan software database tertentu.', 'back end developer', 'Front end developer', 'Fullstack developer', 'System Analyst', 'IT Consultant', 'Data Scientist');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampus`
--

CREATE TABLE `kampus` (
  `kampus` varchar(255) NOT NULL,
  `desc_kampus` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kampus`
--

INSERT INTO `kampus` (`kampus`, `desc_kampus`) VALUES
('Telkom University', 'Telkom University berdiri pada tanggal 14 Agustus 2013 berdasarkan Surat Keputusan Direktur Jenderal Pendidikan Tinggi Kemendikbud Nomor 309/E/0/2013. Telkom University adalah Perguruan Tinggi Swasta yang diselenggarakan oleh Yayasan Pendidikan Telkom, dan merupakan penggabungan dari empat Perguruan Tinggi Swasta, yaitu institut Teknologi Telkom (IT Telkom), Institut Manajemen Telkom (IM Telkom), Politeknik Telkom, dan Sekolah Tinggi Seni Rupa dan Desain Indonesia Telkom (STISI Telkom).\r\n Kampus yang berlokasi di Bandung ini memiliki akreditasi UNGGUL dan menempati peringkat 1 Perguruan Tinggi Swasta (PTS) di Indonesia versi Kemenristekdikti, Webometrics, Times Higher Education World University Ranking, Science and Technology (SINTA), UniRank dan SCImago, serta mendapatkan pemeringkatan dunia QS untuk kategori Online Learning bintang 5.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampuses`
--

CREATE TABLE `kampuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_kampus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_kampus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kampuses`
--

INSERT INTO `kampuses` (`id`, `created_at`, `updated_at`, `nama_kampus`, `desc_kampus`, `picture`, `biaya`, `fakultas1`, `jurusan1`, `fakultas2`, `jurusan2`, `fakultas3`, `jurusan3`, `fakultas4`, `jurusan4`) VALUES
(1, '2022-04-17 23:04:00', '2022-04-17 23:04:00', 'Telkom University', 'Telkom University berdiri pada tanggal 14 Agustus 2013 berdasarkan Surat Keputusan Direktur Jenderal Pendidikan Tinggi Kemendikbud Nomor 309/E/0/2013. Telkom University adalah Perguruan Tinggi Swasta yang diselenggarakan oleh Yayasan Pendidikan Telkom, dan merupakan penggabungan dari empat Perguruan Tinggi Swasta, yaitu institut Teknologi Telkom (IT Telkom), Institut Manajemen Telkom (IM Telkom), Politeknik Telkom, dan Sekolah Tinggi Seni Rupa dan Desain Indonesia Telkom (STISI Telkom).\\r\\n Kampus yang berlokasi di Bandung ini memiliki akreditasi UNGGUL dan menempati peringkat 1 Perguruan Tinggi Swasta (PTS) di Indonesia versi Kemenristekdikti, Webometrics, Times Higher Education World University Ranking, Science and Technology (SINTA), UniRank dan SCImago, serta mendapatkan pemeringkatan dunia QS untuk kategori Online Learning bintang 5.', 'Kampus/telkom.png', 'https://smb.telkomuniversity.ac.id/biaya-pendidikan/biaya-pendidikan-reguler/', 'Fakultas Teknik Elektro', 'S1 Teknik Telekomunikasi - S1 Teknik Elektro - S1 Teknik Biomedis', 'Fakultas Rekayasa Industri', 'S1 Teknik Industri - S1 Sistem Informasi - S1 Teknik Logistik', 'Fakultas Informatika', 'S1 Informatika - S1 Teknologi Informasi - S1 Rekayasa Perangkat Lunak', 'Fakultas Komunikasi Bisnis', 'S1 Administrasi Bisnis - S1 Ilmu Komunikasi - S1 Digital Public Relation'),
(2, '2022-04-17 23:04:00', '2022-04-17 23:04:00', 'Universitas Padjajaran', 'tahukah kamu bahwa Universitas Padjadjaran berhasil menjadi universitas terfavorit di Indonesia selama bertahun-tahun? Sebagai salah satu universitas terbaik di Indonesia, Universitas Padjadjaran berhasil menarik minat siswa di Indonesia untuk bisa menempuh pendidikan di kampus Bumi Parahyangan ini. Tentu akan menjadi kebanggaan tersendiri bagi Quipperian yang berhasil bersaing dengan puluhan ribu siswa dan mendapatkan kursi untuk belajar di kampus yang memiliki jumlah mahasiswa asing terbanyak kedua di Indonesia ini.', 'Kampus/unpad.png', 'http://smup.unpad.ac.id/', 'Fakultas Kedokteran', 'S1 Pendidikan DOkter - S1 Kesehatan Masyarakat - S1 Kedokteran hewan - S1 Radiologi', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'S1 Matematika - S1 Farmasi - S1 Fisika - S1 Aktuaria - S1 Kimia', 'Fakultas Ilmu Komunikasi', 'S1 Ilmu Komunikasi - S1 Ilmu Perpustakaan - S1 Film dan Televisi - S1 Public Relation - S1 Jurnalistik', 'Fakultas EKonomi dan Bisnis', 'S1 Bisnis DIgital - S1 Akuntansi - S1 Ilmu Ekonomi - S1 Bisnis - S1 Manajemen Keuangan'),
(3, '2022-04-17 23:04:00', '2022-04-17 23:04:00', 'Institut Teknologi Bandung', 'Institut Teknologi Bandung merupakan kampus impian bagi hampir semua pelajar di Indonesia, terutama yang ingin melanjutkan pendidikan pada bidang teknik/sains. Bagaimana tidak, kampus ini merupakan lokasi dari sekolah tinggi teknik pertama di Indonesia yang berdiri pada tahun 1920 dengan nama De Technische Hoogeschool te Bandung. Institut Teknologi Bandung telah lebih dari 50 tahun berkontribusi dalam menyelenggarakan pendidikan tinggi di Indonesia. Dan banyak banget lho tokoh-tokoh besar negeri ini yang merupakan alumni dari kampus ini!', 'Kampus/itb.png', 'https://biayakuliah.net/ukt-itb-bandung/', 'Fakultas Teknik Pertambangan dan Perminyakan', 'S1 Geofisika - S1 Teknik Pertambangan - S1 Ilmu Teknik - S1 Teknik Perminyakan', 'Fakultas Bisnis dan Manajemen', 'S1 Manajemen - S1 Administrasi Bisnis', 'Fakultas Teknik Sipil dan Lingkungan', 'S1 Perencanaan WIlayah dan kota - S1 Teknik Lingkungan - S1 Teknik Sipil', 'Fakultas Teknik Eletro dan Informatika', 'S1 Teknik Informatika - S1 Sistem Informasi - S1 Teknik ELektro - S1 Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_06_094148_create_products_table', 1),
(6, '2022_04_16_121303_create_testimoni_produks_table', 1),
(7, '2022_04_17_174401_create_kampuses_table', 1),
(8, '2022_04_17_180820_create_jurusans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaproduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisproduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `namaproduct`, `jenisproduct`, `tanggal`, `desc`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Researchers Tips to Publications', 'Webinar', '2020-08-14', 'Free Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'w1.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(2, 'Ultrasound for Emergency Care in New Normal Era', 'Webinar', '2020-08-14', 'Free Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'w1.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(3, 'Masyarakat Well-Educated untuk Indonesia', 'Webinar', '2020-08-27', 'Webinar Series bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'w2.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(4, 'Webinar Generation Diversity', 'Webinar', '2020-06-12', 'Webinar Generation Diversity Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'w3.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(5, 'Becoming Indonesian Young Heroes', 'Webinar', '2020-12-18', 'Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'w4.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(6, 'Webinar UBSI NEXT', 'Webinar', '2020-08-26', 'Webinar UBSI NEXT bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'w5.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(7, 'Hukum', 'Kepo Jurusan', '2020-06-12', 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'kj0.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(8, 'Kimia', 'Kepo Jurusan', '2020-07-18', 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'kj1.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(9, 'Psikologi', 'Kepo Jurusan', '2020-12-05', 'Kepo Jurusan Salah Jurusan Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'kj2.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(10, 'Ilmu Komputer', 'Kepo Jurusan', '2021-06-23', 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'kj3.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(11, 'Sistem Informasi', 'Kepo Jurusan', '2020-12-20', 'Kepo Jurusan Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'kj4.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(12, 'Rekayasa Tekstil', 'Kepo Jurusan', '2021-04-10', 'Kepo Jurusan bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'kj5.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(13, 'Membuat Virtual Tour', 'Major Experience', '2020-04-25', 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'me0.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(14, 'Teknik Dasar AutoCAD', 'Major Experience', '2021-02-13', 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'me1.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(15, 'Bisnis Generasi Milenial', 'Major Experience', '2021-03-13', 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'me2.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(16, 'A Great Art, Craft, and Design', 'Major Experience', '2021-12-05', 'Major Experience Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'me3.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(17, 'The Healing Power Of Journey', 'Major Experience', '2020-09-15', 'Major Experience Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'me4.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58'),
(18, 'Cara Mudah Membuat Aplikasi Android', 'Major Experience', '2021-04-10', 'Major Experience bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.', 'me5.jpg', '2022-04-17 23:02:58', '2022-04-17 23:02:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni_produks`
--

CREATE TABLE `testimoni_produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenisproduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimoni_produks`
--

INSERT INTO `testimoni_produks` (`id`, `created_at`, `updated_at`, `jenisproduct`, `id_user`, `picture`, `name`, `desc`, `show`) VALUES
(1, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Kepo Jurusan', '2', 'profile1.jpg', 'Fakhri', 'Saya sebagai peserta kepo jurusan merasa sangat terbantu dengan adanya platform ngampus dalam menentukan jurusan kuliah, terimakasih', 'yes'),
(2, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Kepo Jurusan', '3', 'profile2.jpg', 'Pradita', 'Terimakasih ngampus buat platformnya, berguna banget buat saya yang lagi bingung nyari-nyari informasi buat jurusan yang emang saya tuju', 'yes'),
(3, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Kepo Jurusan', '4', 'profile3.jpg', 'Alif', 'Kepo Jurusan ini tuh bener-bener akan membantu kamu untuk menentukan jurusan impianmu, serius deh ga boong, ayok daftar ngampus sekarang', 'yes'),
(4, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Kepo Jurusan', '5', 'profile4.jpg', 'Virza', 'Aaaaa keren banget ngampus buat kepo jurusannya, aku jadi kebantu banget buat nentuin jurusan apa yang mau aku ambil, thank you ngampus', 'no'),
(5, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Major Experience', '6', 'profile5.jpg', 'Rafi', 'Gokil, Major Experience bener-bener ngebantu gua buat tau gimana sih gambaran dunia kuliah tentang skill yang dipelajari, keren ngampus', 'yes'),
(6, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Major Experience', '2', 'profile1.jpg', 'Fakhri', 'Saya sebagai peserta Major Experience merasa sangat terbantu dengan adanya platform ngampus dalam memberikan gambaran kuliah', 'yes'),
(7, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Major Experience', '3', 'profile2.jpg', 'Pradita', 'Terimakasih Ngampus, programnya berguna banget, ga sia-sia daftar buat ikut major experience dari ngampus, keren banget sih ngampus ini', 'yes'),
(8, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Major Experience', '4', 'profile3.jpg', 'Alif', 'Major Experience ini tuh bener-bener akan membantu kamu buat belajar skill apa aja yang dibutuhin dengan didampingi expertnya langsuuung', 'no'),
(9, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Webinar', '5', 'profile4.jpg', 'Virza', 'Pokoknya ngampus mantep bet dah tema webinarnya menarik yaitu seputar dunia perkuliahan dengan narasumber yang berpengalaman dibidangnya', 'yes'),
(10, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Webinar', '6', 'profile5.jpg', 'Rafi', 'Webinar ngampus ga kaleng-kaleng pokonya mantep, daftarnya gampang, materinya gokil keren abis, narasumbernya juga goks, mantap pokonya', 'yes'),
(11, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Webinar', '2', 'profile1.jpg', 'Fakhri', 'Saya sebagai peserta Webinar merasa sangat terbantu dengan adanya platform ngampus dalam memberikan tema webinar yang sangat menarik', 'yes'),
(12, '2022-04-17 23:04:16', '2022-04-17 23:04:16', 'Webinar', '3', 'profile2.jpg', 'Pradita', 'Applause buat ngampuss, webinarnya keren, materinya oke, narsumnya ajib, kurang apa lagi coba? next mau coba daftar lagi tema lain', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `no_telp`, `picture`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '081234567890', 'profile.jpg', NULL, 1, '$2y$10$eaEzwy7kGH3MftP.v4Swzec8GzuwXdPtHznDic9wLBLk8bwsNxPT6', NULL, '2022-04-17 23:03:38', '2022-04-17 23:03:38'),
(2, 'Fakhri', 'fakhri@gmail.com', '082345678901', 'profile1.jpg', NULL, 0, '$2y$10$ZsVKzeliTU2XNH/WyVpDHelZgwWeEhwbAEuO4A8c3VKEMhMh8T4/S', NULL, '2022-04-17 23:03:38', '2022-04-17 23:03:38'),
(3, 'Pradita', 'pradita@gmail.com', '083456789012', 'profile2.jpg', NULL, 0, '$2y$10$WpUIOSQufQ3UQAn5dI8e4ex3/XMl9RJfJwXCG1nVIt0cKTf8ACxOS', NULL, '2022-04-17 23:03:38', '2022-04-17 23:03:38'),
(4, 'Alif', 'alif@gmail.com', '084567890123', 'profile2.jpg', NULL, 0, '$2y$10$w99A1yt/.Oju6YMdQOhWTuh04qRYG2P346tY/IlGR0nEdFaJSmKI.', NULL, '2022-04-17 23:03:38', '2022-04-17 23:03:38'),
(5, 'Virza', 'virza@gmail.com', '085678901234', 'profile2.jpg', NULL, 0, '$2y$10$IZ7vbZHN8oAfeoUHJ2LJE.knI24R0vUf3HmjZxDF4qkKoqhXlBFla', NULL, '2022-04-17 23:03:38', '2022-04-17 23:03:38'),
(6, 'Rafi', 'rafi@gmail.com', '086789012345', 'profile2.jpg', NULL, 0, '$2y$10$Qw5qjJIexhEU0N5jRWMqVuVAEhKfVPoafdQNyf1jJcfGZpSrAngVK', NULL, '2022-04-17 23:03:38', '2022-04-17 23:03:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kampuses`
--
ALTER TABLE `kampuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni_produks`
--
ALTER TABLE `testimoni_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kampuses`
--
ALTER TABLE `kampuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `testimoni_produks`
--
ALTER TABLE `testimoni_produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
