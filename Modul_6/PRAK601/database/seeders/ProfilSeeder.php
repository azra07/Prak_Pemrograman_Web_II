<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    public function run()
    {
        DB::table('profils')->insert([
            'nama' => 'Putri Fatima Az\'hara',
            'nim' => '2410817120001',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Nonton film, Mendengar musik, Membaca buku',
            'skill' => 'Canva, MS Office, Figma, Google office, Website Development',
            'gambar' => 'foto.jpg',
            'created_at' => now(),
        ]);
    }
}