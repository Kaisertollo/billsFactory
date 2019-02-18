<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compteur extends Model
{
    //
       // Table Name
       //protected $table='compteurs';
    
       //primary key
       public $primaryKey='id';
       
       //Timestamps
       public $timestamps=true;
       public function abonnement()
       {
           return $this->hasOne(abonnement::class);
       }
}
