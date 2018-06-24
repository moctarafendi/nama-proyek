<?php
	use Illuminate\Database\Seeder;



	class SeederTableAnggota extends Seeder{
		public function run(){
			//kosongkan table anggota
			DB::table('anggota')->delete();
			//buat data berupa array untuk diinput ke database
			$anggota = array(
								array('id'=>'1', 'nama'=>'Akhmad Darma Kasman', 'alamat'=>'Jakarta'),
								array('id'=>'2', 'nama'=>'Kresna Abimanyu', 'alamat'=>'Bogor'),
								array('id'=>'3', 'nama'=>'Dewi Retno', 'alamat'=>'Depok')
							);
			//masukkan data ke database
			DB::table('anggota')->insert($anggota);
		}

	}
?>