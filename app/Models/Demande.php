<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ['citoyen_id', 'service_id'];

    public function citoyen()
    {
        return $this->belongsTo(Citoyen::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
