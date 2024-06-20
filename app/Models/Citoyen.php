<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'lieu_naissance', 'telephone', 'cnib'];
}

