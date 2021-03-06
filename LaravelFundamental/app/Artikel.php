<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {

    protected $table = 'artikel';
	protected $fillable = [
        'title',
        'body',
        'penulis',
        'published_at',
        'user_id'
    ];

    public function setPublishedAtAttribute($data){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $data);
    }

    /**
     * Menandakan bahwa model class artikel berhubungan dengan model class User
     */
    public function User(){
        return $this->belongsTo('App\User');
    }

    /**Menandakan bahwa model class artikel dapat berhubungan 'banyak' dengan model class Katagori
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Kategori(){
        return $this->belongsToMany('App\Kategori','detail_kategori')->withTimestamps();
    }

    /**
     * Get List id dari tabel kategori, d pakai di file blade saat aksi edit untuk
     * menampilkan form mana yg ter select sesuai database tabel kategori n detail_kategori
     */
    public function getKategoriListAttribute(){
        return $this->kategori->lists('id');
    }


}
