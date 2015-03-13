<?php

class PostsTableSeeder extends Seeder{
    
    public function run(){
        //kosongkan tabel posts, supaya tidak terjadi duplikasi 
        //data ketika create tabel
        DB::table('posts')->delete();
        
        //buat data berupa array untuk di input ke database
        $posts = array(
            array('id'=>1, 'title'=>'Tips Cepat nikah', 'content'=>'lorel ipsum'),
            array('id'=>2, 'title'=>'Haruskah menunda nikah?', 'content'=>'lorel ipsum'),
            array('id'=>3, 'title'=>'Membangun visi misi keluarga','content'=>'lorel ipsum')
        );
        
        //masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
?>