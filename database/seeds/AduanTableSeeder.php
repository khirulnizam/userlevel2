<?php

use Illuminate\Database\Seeder;

class AduanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //contoh aduan
        DB::table('aduans')->insert(
        	['nama'=>'Ali Bakar',
        	'tarikh'=>'2019-07-27',
        	'butiraduan'=> 'Longkang sumbat',
        	'telefon'=>'0129034614',
        	]
        );

        DB::table('aduans')->insert(
        	['nama'=>'Mohamad Ghani',
        	'tarikh'=>'2019-07-27',
        	'butiraduan'=> 'Jalan lubang di Jalan 1 BSP',
        	'telefon'=>'012977777',
        	]
        );

        DB::table('aduans')->insert(
        	['nama'=>'Izzat Jalil',
        	'tarikh'=>'2019-07-27',
        	'butiraduan'=> 'Tombol pecah',
        	'telefon'=>'0111111777',
        	]
        );

        DB::table('aduans')->insert(
        	['nama'=>'Sofuan Salleh',
        	'tarikh'=>'2019-07-01',
        	'butiraduan'=> 'Kurang kasih sayang',
        	'telefon'=>'0112222277',
        	]
        );

    }
}
