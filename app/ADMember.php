<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ADMember extends Model
{
    protected $fillable = ['memberNama','memberJabatan','memberAlamat','memberLevel'];
}