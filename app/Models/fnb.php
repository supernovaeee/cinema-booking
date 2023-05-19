<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fnb extends Model
{
    use HasFactory;
    protected $table = "fnb";
    protected $primaryKey = "id_fnb";
    protected $guarded = ['id_fnb'];
    public $timestamps = false;

}
