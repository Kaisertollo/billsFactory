<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
       // Table Name
      // protected $table='abonnements';
    
       //primary key
       public $primaryKey='id';
       
       //Timestamps
       public $timestamps=true;
       public function compteur()
       {
           return $this->belongsTo(Compteur::class);
       }

       public function factures()
       {
           return $this->hasMany(facture::class);
       }
}
