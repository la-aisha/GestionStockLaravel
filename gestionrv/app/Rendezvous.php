<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    protected $fillable = array('medecins_id',libelle','date');
    public static$rules = array('libelle'=>'requiredlmin:20',
    'date'=>'requiredlmin:3');
    //
    public function rendezvous(){
        return $this->hasMany('App\Medecin');
    }
    //
}
