<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ADMember extends Model
{
    public $table = 'tmember';
    protected $fillable = ['memberNama','memberJabatan','memberAlamat','memberLevel'];
}