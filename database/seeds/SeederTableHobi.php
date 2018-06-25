<?php

use Illuminate\Database\Seeder;

class SeederTableHobi extends Seeder{
	public function run(){
		//kosongkan table hobi
		DB::table('hobi')->delete();

		//buat data berupa array untuk diinput ke database

		$hobi = array(
					array('hobi'=>'Traveling', 'anggota_id'=>'1'),
					array('hobi'=>'Nonton Film', 'anggota_id'=>'2'),
					array('hobi'=>'Kuliner', 'anggota_id'=>'1'),
					array('hobi'=>'Membaca Buku', 'anggota_id'=>'2')
			);
		//masukkan data ke database
		DB::table('hobi')->insert($hobi);

	}

}

?>