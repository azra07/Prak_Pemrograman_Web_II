<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengalamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengalamans')->insert([
            ['judul' => 'Presidium Musyawarah Besar', 'deskripsi' => 'Pengalaman sebagai presidium untuk memimpin jalannya musyawarah besar', 'waktu' => '2024', 'kesan' => 'Sikit menyenangkan', 'gambar' => 'exp1.jpg', 'created_at' => now()],
            ['judul' => 'Organisasi HMTI', 'deskripsi' => 'Organisasi himpunan mahasiswa prodi Teknologi Informasi', 'waktu' => '2025', 'kesan' => 'Seruu!', 'gambar' => 'exp2.jpg', 'created_at' => now()],
            ['judul' => 'Survei Posyandu', 'deskripsi' => 'Melakukan wawancara dengan kader posyandu untuk memenuhi kebutuhan data lomba PKM', 'waktu' => '2026', 'kesan' => 'Orang-orangnya ramah', 'gambar' => 'exp3.jpg', 'created_at' => now()],
            ['judul' => 'Moderator', 'deskripsi' => 'Memandu jalannya acara dan membantu memberikan arahan materi sesuai keahlian saya', 'waktu' => '2026', 'kesan' => 'First time', 'gambar' => 'exp4.jpg', 'created_at' => now()],
        ]);
    }
}