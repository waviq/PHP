<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {


    protected $table = 'kategori';
    protected $fillable = ['namaKategori'];

    /**Menandakan bahwa class Model Kategori punya hubungan many dg class model Artikel
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function artikel(){
        return $this->belongsToMany('App\Artikel');
    }

}
