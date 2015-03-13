<?php

    class customersTableSeeder extends Seeder{
        public function run() {
            //menghapus isi tabel customers, biar gak terjadi duplikasi data
            DB::table('customers')->delete();
           
            $customers = array(
                array('nama'=>'waviq','alamat'=>'Tegal', 'email'=>'waviq.subkhi@gmail.com'),
                array('nama'=>'samsul','alamat'=>'slawi', 'email'=>'samsul@gmail.com')
            );
            
            DB::table('customers')->insert($customers);
        }
    }
?>

