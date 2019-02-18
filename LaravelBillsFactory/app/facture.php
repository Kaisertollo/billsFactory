<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    //
       // Table Name
       //protected $table='factures';
    
       //primary key
       public $primaryKey='id';
       
       //Timestamps
       public $timestamps=true;
       public function abonnement()
       {
           return $this->belongsTo(abonnement::class);
       }
}
