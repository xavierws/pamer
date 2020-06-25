<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataSiswa extends Model
{
    protected $fillable = ['user_id', 'nama', 'ttl', 'nohp'];
}
