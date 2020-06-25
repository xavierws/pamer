<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataPengajar extends Model
{
    protected $fillable = ['user_id', 'nama', 'ttl', 'nohp'];
}
