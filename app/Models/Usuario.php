<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table='users';

    protected $guarded =[];

    public $timestamps = false;

    protected $primaryKey = 'id';

}