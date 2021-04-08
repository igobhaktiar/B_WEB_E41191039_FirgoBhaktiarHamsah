<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswa')->insert([
        	'nama' => 'Firgo Bhaktiar Hamsah',
        	'nim' => '41191039',
        	'alamat' => 'Banyuwangi',
        	'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => '082331562744'
        ]);
    }
}
