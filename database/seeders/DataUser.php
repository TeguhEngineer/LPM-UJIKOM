<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DataUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            // Admin
            [
                'nama'          => 'admin',
                'username'      => 'admin',
                'password'      => bcrypt('12345'),
                'email'         => 'admin@gmail.com',
                'jk'            => 'laki-laki',
                'role'          => 'admin'
            ],

            // Petugas
            [
                'nama'          => 'petugas',
                'username'      => 'petugas',
                'password'      => bcrypt('12345'),
                'email'         => 'petugas@gmail.com',
                'jk'            => 'laki-laki',
                'role'          => 'petugas'
            ],

            // Masyarakat
            [
                'nik'           => '1234567890123456',
                'nama'          => 'masyarakat',
                'username'      => 'masyarakat',
                'password'      => bcrypt('12345'),
                'email'         => 'masyarakat@gmail.com',
                'jk'            => 'laki-laki',
                'telepon'       => '085001200045',
                'alamat'        => 'Dusun. Pondokunyur RT/16 RW/03, Desa. Cintajaya, Kec. Lakbok, Kab. Ciamis',
                'role'          => 'masyarakat'
            ]
        ])->each(function($data){
            User::create($data);
        });
    }
}
