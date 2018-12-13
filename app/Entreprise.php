<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entreprise extends Authenticatable
{
    use Notifiable;
    protected $guard = 'entreprise';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email', 'password','slug','tel','datefoundation','categorie_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function carrieres()
    {
        return $this->hasMany('App\OffreCommerciale');
    }

    public function offre_emplois()
    {
        return $this->hasMany('App\OffreEmploie');
    }

    public function categories(){
        return $this->belongsTo('App\Categorie','categorie_id');
    }




}
