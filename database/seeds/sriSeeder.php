<?php

use Illuminate\Database\Seeder;

class sriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
              ['Nis'=>'123',
              'Nama'=>'Sri Mukti Rahayu',
              'Tempat_lahir'=>'Bandung',
              'Tanggal_lahir'=>'2001-04-14',
              'Alamat'=>'Bandung',
              'Cita-Cita'=>'Designer',
              'Hobby'=>'Dance and Jaipong',
              'Photos'=>'Kepo']
              ];
                DB::table('siswas')->insert($a);
             
    }
}