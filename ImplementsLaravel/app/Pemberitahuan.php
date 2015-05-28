<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemberitahuan extends Model {

    protected $fillable = [
        'provider_id',
        'judul_pelanggaran',
        'link_pelanggaran',
        'link_asli',
        'deskripsi',
        'template',
        'content_removed'

    ];


    /**
     * Pemberitahuan belongs to penerima/provider model
     * jadi default nama ne biasane sesuai nama model e, namun bsa d ganti apa aja, yg penting parameternya
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penerima(){
        return $this->belongsTo('App\Provider','provider_id');
    }

    /**
     * Model Pemberitahuyan created by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }


    /**
     * Get the email address dari penerima/provider Model ke DMCA pemberitahuan model
     */
    public function getPenerimaEmail(){

        return $this->penerima->copyright_email;
    }


    /**
     * Get the email address owner dari Model Pemberitahuan
     * @return mixed
     */
    public function getOwnerEmail(){
        return $this->user->email;
    }







    /**
     * Open new Pemberitahuan, fungsi ini di kirim di PemberitahuanController@store
     * @param array $attributes
     * @return static
     */
    /*public static function open(array $attributes){

        return new static($attributes);
    }*/

    /**
     * Set the email template for Pemberitahuan
     * @param string $template
     */
    /*public function useTemplate($template){
        $this->template = $template;
        return $this;
    }*/


}
