<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'msisdn', 'customername'
    ];

   public function Clients() {
        return $this->belongsTo(Client::class,'client_id');
    }


}
