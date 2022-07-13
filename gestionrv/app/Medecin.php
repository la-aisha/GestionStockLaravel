<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = array('nom','prenom','tel');
    public static$rules = array('nom'=>'requiredlmin:2',
    'prenom'=>'requiredlmin:3',
    'tel'=>'requiredlmin:9');
    //
    public function rendezvous(){
        return $this->hasMany('App\Rendezvous');
    }
}
